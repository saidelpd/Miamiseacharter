<?php namespace App\Commands\Appointments;

use App\Commands\Command;
use Carbon\Carbon;
use Illuminate\Contracts\Bus\SelfHandling;
use App\Http\Model\Appointments;
use App\Http\Model\Services;



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

    function __construct($service, $app_date, $hours, $first, $last, $phone, $email, $user_code, $token)
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

        dd($this);
    }


    /**
     * Execute the command.
     * @return void
     */
    public function handle()
    {
        $user = User::where('email',$this->request->email)->with('role')->first();
        if($user && count($user->roles) && $user->roles->isRole('Guest'))
        {
            $user->first = 'Test';
            $user->last = 'Perez';
            $user->phone = '786-449-8395';
            $user->save();
        }
        else if(!$user) {
            $user = User::create([
                'first'=>'Yaima',
                'last'=>'Rodriguez',
                'email'=>$this->request->email,
                'phone'=>'786-449-8395',
                'roles_id' => '4'
            ]);
        }
        $payment = Payments::create([
            'user_id'=>$user->id,
            'total'=>18,
            'taxes'=>2
        ]);
        $pago = $payment->charge(2000, [
            'source' => $this->request->input('stripe-token'),
            'receipt_email' => $user->email,
        ]);
        dd('CHARGE DONE',$pago);
        return (Array) $this;
    }


}
