<?php namespace  App\Http\Helpers;
use View;
trait HelperTrait
{
     /**
     * @param string $title
     * @param null $script
     */
    protected function setupLayout( $title = "", $script = null)
    {
        if($script){ $script = $this->Load_Script($script); }
           View::share([
            'TITLE' => $title,
            'load_scripts' => $script
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
            "multiselect"=>"vendor/multiselect/bootstrap-multiselect",
            /*Graphs libraries*/
            "flot" => "vendor/flot/jquery.flot.min",
            "flot-resize" => "vendor/flot/jquery.flot.resize.min",
            "flot-time" => "vendor/flot/jquery.flot.time.min",
            "flot-tooltip" => "vendor/flot/jquery.flot.tooltip.min",
            "flot-orderBars" => "vendor/flot/jquery.flot.orderBars",
            /*PRINT*/
            'jprint'=>"vendor/printPage/jquery.printPage",
        ];
        return $this->loading($alias, $need);
    }

}