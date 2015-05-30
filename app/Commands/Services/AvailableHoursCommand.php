<?php namespace App\Commands\Services;

use App\Commands\Command;
use Validator,Carbon\Carbon;
use Illuminate\Contracts\Bus\SelfHandling;
use App\Http\Model\Services;
use App\Http\Model\Boats;



class AvailableHoursCommand extends Command implements SelfHandling
{

    public $id;
    public $date;
    public $has_error;
    public $hours;

    function __construct($id, $date)
    {
      $this->id = $id;
      $this->has_error = false;
      $this->date = $date;
    }

    /**
     * Execute the command.
     * @return void
     */
    public function handle()
    {
        $validation = $this->validate();
        if ($validation->fails()) {
            $this->has_error = true;
            return $this;
        }
        $this->date = Carbon::createFromFormat('m/d/Y',$this->date);
        $this->getHours();
        return $this;
    }

    public function validate()
    {
        $v = Validator::make((array)$this, [
            'id' => 'required|exists:services',
            'date' => 'required|date_format:m/d/Y'
        ]);
        return $v;
    }

    public function getHours()
    {
        $services = Services::with('times')->find($this->id);
        $hours=[];
       if(count($services->times))
       {
           foreach($services->times as $times)
           {
               $time = $times->GetTime($this->date);
               dd($time);
           }
       }
    }

}
