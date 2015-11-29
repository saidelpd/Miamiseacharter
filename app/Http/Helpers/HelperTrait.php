<?php namespace  App\Http\Helpers;
use View;
trait HelperTrait
{
    /**
     * @param string $title
     * @param null $script
     * @param null $api
     */
    protected function setupLayout( $title = "", $script = null, $api = null)
    {
        if($script){ $script = $this->Load_Script($script); }
           View::share([
            'TITLE' => $title,
            'load_scripts' => $script,
             'api' => $api
        ]);
    }

    /**
     * Function to load all The scripts in the required order
     * @param $scripts
     * @param $need
     * @return array
     */
    public function loading($scripts, $need)
    {
        $result = [];
        $depend_alias=false;
        if (is_array($need)) {
            foreach ($need as $sct) {
                if (isset($scripts[$sct])) {
                    $result[] = $scripts[$sct];
                    $depend_alias = true;
                } else {
                    if($depend_alias && !in_array("helper", $result)) $result[] = 'helper';
                    $result[] = $sct;
                }
            }
            if($depend_alias && !in_array("helper", $result)){$result[] = 'helper';}
        } else {
            if (isset($scripts[$need])) {
                $result[] = $scripts[$need];
                $result[] = 'helper';
            } else {
                $result[] = $need;
            }
        }
        return $result;
    }

    /**
     * GET THE ARRAY FOR JS
     * PLACE ALL ALIAS HERE
     * @param $need
     * @return array
     */
    public function Load_Script($need)
    {
        /*script alias*/
        $alias = [
            /*HELPERS*/
            "helper" => "helper",
            "ini_dates" => "ini_dates",
            "jquery-ui"=>"vendor/jquery-ui.min",
            "icheck"=>"vendor/icheck/icheck.min",
            "jedit"=>"vendor/jeditable/jedit",
            /*Graphs libraries*/
            "flot" => "vendor/flot/jquery.flot.min",
            "flot-resize" => "vendor/flot/jquery.flot.resize.min",
            "flot-time" => "vendor/flot/jquery.flot.time.min",
            "flot-tooltip" => "vendor/flot/jquery.flot.tooltip.min",
            "flot-orderBars" => "vendor/flot/jquery.flot.orderBars",
            /*PRINT*/
            'jprint'=>"vendor/printPage/jquery.printPage",

            /*FRONT END VERSION*/
            'instafeed'=>"vendor/instafeed/instafeed.min",
            'simplyscroll'=>"vendor/jqueryScroll/jquery.simplyscroll.min",
            'jqueryScroll'=>"vendor/jqueryScroll/jquery.scrollTo.min",
            'lightbox'=>"vendor/lightbox/lightbox",
            /*CALENDAR*/
            'moment'=>'vendor/full-calendar/moment.min',
            'calendar'=>'vendor/full-calendar/fullcalendar.min',

        ];
        return $this->loading($alias, $need);
    }

    /**
     * TO Use With Dates
     * @param $startDate
     * @param $endDate
     * @param $period
     * @return stdClass
     */

    public function ByDateScope($startDate , $endDate , $period)
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