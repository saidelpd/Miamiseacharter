<?php namespace App\Http\Helpers;

use App\Http\Model\Commission;
use stdClass, Form, Carbon\Carbon;
use App\Http\Model\Appointments;
use App\Http\Model\Payments;

class HelperClass
{
    /**
     * Delete Form
     * @param $routeParams
     * @param string $label
     * @param bool $ajax
     * @param string $button_class
     * @return string TO USE IN: VIEW
     * TO USE IN: VIEW
     * HOW TO USE: {{delete_form(['route',$id],"Delete(opt)",true(opt))}}
     */
    public static function delete_form($routeParams, $label = 'delete', $ajax = false, $button_class = 'btn btn-danger')
    {
        $array_form_att = ['method' => 'DELETE', 'route' => $routeParams];
        if ($ajax) {
            array_push($array_form_att, "data-remote");
        }
        $form = Form::open($array_form_att);
        $form .= Form::submit($label, ['class' => $button_class]);
        return $form .= Form::close();
    }


    /**
     * Format Integer TO Dollar
     * @param $number
     * @param bool $dollar_coma
     * @return string
     */
    public static function Currency($number, $dollar_coma = false)
    {
        $number = ($number && is_numeric($number)) ? $number : 0;
        return '$' . number_format($number, 2);
    }

    /**
     * Takes the last comma or dot (if any) to make a clean float, ignoring thousand separator, currency or any other letter.
     * $otherNum = '126,564,789.33 m²';
     * var_dump(tofloat($otherNum)); // return(126564789.33)
     * @param $num
     * @return float
     */
    public static function tofloat($num)
    {
        $dotPos = strrpos($num, '.');
        $commaPos = strrpos($num, ',');
        $sep = (($dotPos > $commaPos) && $dotPos) ? $dotPos :
            ((($commaPos > $dotPos) && $commaPos) ? $commaPos : false);
        if (!$sep) {
            return floatval(preg_replace("/[^0-9]/", "", $num));
        }
        return floatval(
            preg_replace("/[^0-9]/", "", substr($num, 0, $sep)) . '.' .
            preg_replace("/[^0-9]/", "", substr($num, $sep + 1, strlen($num)))
        );
    }

    public static function ByDateScope($startDate, $endDate, $period)
    {
        $dates = new stdClass();
        $startDate = new Carbon($startDate);
        $start = $startDate->startOfDay()->toDateTimeString();
        if ($endDate) {
            $endDate = new Carbon($endDate);
            $endDate = $endDate->endOfDay()->toDateTimeString();
        } else {
            $endDate = ($period) ? Carbon::now()->toDateTimeString() : $startDate->addDay(1)->toDateTimeString();
        }
        $dates->start = $start;
        $dates->end = $endDate;
        return $dates;
    }

    /**
     * @param $user
     * @param null $date
     * @param null $appointmentId
     * @return int
     */
    public static function UserCommission($user = null, $date = null, $appointmentId = null)
    {
        $date_start = ($date) ? clone $date->startOfMonth() : Carbon::now()->startOfMonth();
        $date_end = ($date) ? clone $date->endOfMonth() : Carbon::now()->endOfMonth();
        $my_app = Appointments::byDate($date_start, $date_end);
        if ($user) {
            $my_app = $my_app->where('user_id', $user->id);
        }
        $my_app = $my_app->with(['payment'=>function($p){
            $p->select('id','total');
        }])->get();
        if($appointmentId) {
           foreach($my_app as $key => $app)
           {
             if($app->id==$appointmentId)
             {
                 if(count($app->payment) && count($user->commission))
                 {
                  $commission = ($key > $user->commission->plus_from) ?  $user->commission->plus : $user->commission->regular;
                  return $app->payment->total * ($commission/100);
                 }
             }
           }
            return 0;
        }
    }

    public static function myAppointmentCommission($user)
    {
        $date_start =  Carbon::now()->startOfMonth();
        $date_end =  Carbon::now()->endOfMonth();
        $commission = Commission::where('user_id',$user->id)->first();
        if(!$commission) return 0;
        $my_payments = Payments::byDate($date_start, $date_end)->active()->count();
        if($commission && $my_payments < $commission->commission_plus_from )
        {
            return $commission->commission_regular/100;
        }
        return $commission->plus/100;
    }

    /**
     * Calculate Tax Base On Amount
     * Default Miami Dade 0.07
     * @param $amount
     * @param float $tax
     * @return float
     */
    public static function tax( $amount,$tax= 0.07)
    {
       return  round( $amount * $tax , 2);
    }


    /**
     * Return Datime And Time in carbon instance
     * @param Carbon $date
     * @param $time
     * @return static
     */
    public static function getDayTime(Carbon $date, $time)
    {
        $dateTime = clone $date;
        $time = explode (':',$time);
        $hour = ($time[0]=='00') ? 24 : $time[0];
        return $dateTime->startOfDay()->addHours($hour)->addMinute($time[1])->addHours($time[2]);
    }

}