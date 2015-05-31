<?php namespace App\Commands\Appointments;

use App\Commands\Command;
use App\Http\Helpers\HelperClass;
use App\Http\Model\Payments;
use App\Http\Model\Services;
use App\Http\Model\User;
use Carbon\Carbon;
use Illuminate\Contracts\Bus\SelfHandling;
use App\Http\Model\Appointments;
use PhpSpec\Exception\Exception;

class StoreCommand extends Command implements SelfHandling
{
     public $service;
     public $app_date;
     public $hours;
     public $first;
     public $last;
     public $phone;
     public $email;
     public $user_code;
     public $token;
     public $price;

    function __construct($service, $app_date, $hours, $first, $last, $phone, $email, $user_code, $token, $price)
    {
        $this->service = $service;
        $this->app_date = $app_date;
        $this->hours = $hours;
        $this->first = $first;
        $this->last = $last;
        $this->phone = $phone;
        $this->email = $email;
        $this->user_code = $user_code;
        $this->token = $token;
        $this->price = $price;

    }
    /**
     * Execute the command.
     * @return void
     */
    public function handle()
    {
       $user_commission =  $this->getUserToGetCommission();
       $user_order = $this->gerUserOrder();
       $service = Services::find($this->service);
       $payment = $this->makePayment($user_order,$user_commission );
    }

    /**
     *Get User By User COde If None Return 1st Admin
     */
    private function getUserToGetCommission()
    {
       return ($this->user_code=='') ? User::admin()->first() : User::where('code', $this->user_code)->first();
    }

    /**
     * Get User By User Base On EMail
     * this is the user how is buying the service
     */
    private function gerUserOrder()
    {
        $user = User::where('email', $this->email)->with('role')->first();
        if ($user && count($user->role) && $user->role->isRole('Guest')) {
            $user->first = $this->first;
            $user->last = $this->last;
            $user->phone = $this->phone;
            $user->save();
            return $user;
        } else if (!$user) {
            $user = User::create([
                'first' => $this->first,
                'last' => $this->last,
                'email' => $this->email,
                'phone' => $this->phone,
                'roles_id' => 4
            ]);
            return $user;
        }
        return $user;
    }

    private function makePayment($user_order,$user_commission){
        if($this->price['cost'] != 0)
        {
            $fee = round(($this->price['total_price'] * 0.029)+ 0.30,2);
            $commission = HelperClass::myAppointmentCommission($user_commission)*$this->price['total_price'];
            $stripe_price = $this->price['total_price']*100;
            $payment = Payments::create([
                'user_id'=>$user_order->id,
                'user_commission_id'=>$user_commission->id,
                'total'=>$this->price['cost'],
                'taxes'=>$this->price['tax'],
                'stripe_fee'=>$fee,
                'commission'=>$commission,
            ]);


            try {
                $pago = $payment->charge($stripe_price, [
                    'source' => $this->token,
                    'receipt_email' => $user_order->email,
                ]);
                dd($pago->id);
            }
            catch(Exception $e) {
                dd($e);
            }




        }
    }


}
