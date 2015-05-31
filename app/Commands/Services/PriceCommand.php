<?php namespace App\Commands\Services;


use App\Commands\Command;
use Carbon\Carbon;
use Illuminate\Contracts\Bus\SelfHandling;
use App\Http\Model\ServicesSpecialPrice;
use App\Http\Model\ServicesTimes;
use App\Http\Helpers\HelperClass;


class PriceCommand extends Command implements SelfHandling
{

    public $id;
    public $currency;
    public $cost;
    public $tax;
    public $total_price;
    public $start_time;
    public $end_time;

    function __construct($id , $currency)
    {
        $this->id = $id;
        $this->currency = $currency;
        $this->cost = 0;
        $this->tax = 0;
        $this->total_price = 0;
    }

    /**
     * Execute the command.
     * @return void
     */
    public function handle()
    {
        $id = explode("-", $this->id);
        $aux_price=0;
        if(count($id)>1)
        {
            /**
             * Special Price
             */
            $service = ServicesSpecialPrice::find($id[1],['special_price','special_hour']);
            $times = ServicesTimes::find($id[0],['time_start']);
            if($service) $aux_price = $service->special_price;
            if($times && $service)
            {
                $this->start_time = $times->time_start;
                $this->end_time = $times->getTimeStart(Carbon::now())->addHours($service->special_hour)->format('H:i:s');
            }
        }
        else {
            $service_time = ServicesTimes::with(['services'=>function($q){
                $q->select('price','id');
            }])->find($this->id,['services_id','id','time_start','time_end']);
            if($service_time && count($service_time->services))
            {
                $this->start_time = $service_time->time_start;
                $this->end_time = $service_time->time_end;
                $aux_price = $service_time->services->price;
            }
        }
         if($this->currency)
         {
             $this->cost = HelperClass::Currency($aux_price);
             $this->tax = HelperClass::Currency(HelperClass::tax($aux_price));
             $this->total_price =  HelperClass::Currency($aux_price + HelperClass::tax($aux_price));
             return (array) $this;
         }
        $this->cost = $aux_price;
        $this->tax = HelperClass::tax($aux_price);
        $this->total_price =  $aux_price + HelperClass::tax($aux_price);
        return (array) $this;
    }

}
