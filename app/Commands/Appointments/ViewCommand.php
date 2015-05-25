<?php namespace App\Commands\Appointments;

use App\Commands\Command;
use Carbon\Carbon;
use Illuminate\Contracts\Bus\SelfHandling;
use App\Http\Model\Appointments;
use App\Http\Helpers\HelperClass;

class ViewCommand extends Command implements SelfHandling
{

    public $id;
    public $appointment;
    public $commission;


    function __construct($id)
    {
      $this->id = $id;
      $this->commission = 0;
    }
    /**
     * Execute the command.
     * @return void
     */
    public function handle()
    {
        $this->appointment = Appointments::with(['boat'=>function($b){
            $b->select('id','name','color');
        },'service'=>function($s){
            $s->select('id','name','description');
        },'payment'=>function($p){
            $p->with('user');
        },'user'=>function($u){
            $u->with('commission');
        }])->find($this->id);
         if(count($this->appointment) && count($this->appointment->user))
        $this->commission = HelperClass::UserCommission($this->appointment->user,$this->appointment->start ,$this->appointment->id);
        return (Array) $this;
    }
}
