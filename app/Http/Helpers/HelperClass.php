<?php namespace App\Http\Helpers;

use stdClass, Form, Carbon\Carbon;

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
        $number = ($number &&  is_numeric($number))? $number :0;
        if($dollar_coma){
                setlocale(LC_MONETARY, 'en_US');
                return  money_format('%(#10.2n', $number);
        }
        return '$ ' . money_format('%i', $number);
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

    public static function ByDateScope($startDate , $endDate , $period)
    {
        $dates = new stdClass();
        $startDate = new Carbon($startDate);
        $start = $startDate->startOfDay()->toDateTimeString();
        if($endDate)
        {
            $endDate = new Carbon($endDate);
            $endDate = $endDate->endOfDay()->toDateTimeString();
        }
        else{
            $endDate = ($period)? Carbon::now()->toDateTimeString() : $startDate->addDay(1)->toDateTimeString();
        }
        $dates->start = $start;
        $dates->end = $endDate;
        return $dates;
    }


}