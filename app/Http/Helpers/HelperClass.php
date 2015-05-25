<?php namespace App\Http\Helpers;

use stdClass, Form, Carbon\Carbon;
use App\Http\Model\Appointments;

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


}