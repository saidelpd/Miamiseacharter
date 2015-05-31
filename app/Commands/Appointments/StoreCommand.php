<?php namespace App\Commands\Appointments;

use App\Commands\Command;
use App\Http\Helpers\HelperClass;
use App\Http\Model\Payments;
use App\Http\Model\Services;
use App\Http\Model\User;
use Carbon\Carbon;
use Illuminate\Contracts\Bus\SelfHandling;
use App\Http\Model\Appointments;
use App\Http\Model\Boats;


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
        $user_commission = $this->getUserToGetCommission();
        $user_order = $this->gerUserOrder();
        $service = Services::find($this->service);
        $payment = $this->makePayment($user_order, $user_commission);
        return $this->createAppointment($service,$payment);
    }

    /**
     *Get User By User COde If None Return 1st Admin
     */
    private function getUserToGetCommission()
    {
        return ($this->user_code == '') ? User::admin()->first() : User::where('code', $this->user_code)->first();
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

    /**
     * Create a Payment in DB
     * @param $user_order
     * @param $user_commission
     * @return static
     */
    private function makePayment($user_order, $user_commission)
    {
        if ($this->price['cost'] != 0) {
            $fee = round(($this->price['total_price'] * 0.029) + 0.30, 2);
            $commission = HelperClass::myAppointmentCommission($user_commission) * $this->price['total_price'];
            $stripe_price = $this->price['total_price'] * 100;
            $payment = Payments::create([
                'user_id' => $user_order->id,
                'user_commission_id' => $user_commission->id,
                'total' => $this->price['cost'],
                'taxes' => $this->price['tax'],
                'stripe_fee' => $fee,
                'commission' => $commission,
            ]);

            $pago = $payment->charge($stripe_price, [
                'source' => $this->token,
                'receipt_email' => $user_order->email,
            ]);
           if($pago)
            {
                $payment->brand = $pago->source->brand;
                $payment->funding = $pago->source->funding;
                $payment->exp_month = $pago->source->exp_month;
                $payment->exp_year = $pago->source->exp_year;
                $payment->country = $pago->source->country;
                $payment->status = $pago->status;
                $payment->stripe_id_payment = $pago->source->id;
                $payment->stripe_id = $pago->id;
                $payment->stripe_id = $pago->id;
                $payment->last_four = $pago->source->last4;
                if ($pago->paid == true) {
                    $payment->stripe_active = 1;
                }
                $payment->save();
            }
            return $payment;
        }
    }


    /**
     * Create Appointment
     * @param $service
     * @param $payment
     * @return \stdClass
     */
    private function createAppointment($service,$payment)
    {
        $response = new \stdClass();
        $response->has_error=false;
        if($payment->stripe_active == 0)
        {
            $response->has_error=true;
            $response->message = "Credit Card Declined.";
            return $response;
        }
        if(!$service)
        {
            $response->has_error=true;
            $response->message = "Unknown Selected Service.";
            return $response;
        }
        $date = Carbon::createFromFormat('m/d/Y',$this->app_date);
        $date_start = HelperClass::getDayTime($date,$this->price['start_time']);
        $date_end = HelperClass::getDayTime($date,$this->price['end_time']);
        /**
         * Chequeo Para si se pasa la hora de la noche add un dia en los appointments
         */
        if($date_start->gt($date_end))
        {
            $date_end->addDay();
        }
        /**
         * Check if there is any boat available
         */
        if($boat = Boats::getFree($date_start, $date_end))
        {
           $appointment = Appointments::create([
                'payments_id' => $payment->id,
                'services_id' => $service->id,
                'boat_id' => $boat->id,
                'start' => $date_start,
                'end' => $date_end
            ]);
            $response->app_id = $appointment->id;
            return $response;
        }
        $response->has_error=true;
        $response->message = "Sorry but there is no availability for this date.";
        return $response;
    }


}
