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

    function __construct($id)
    {
      $this->id = $id;
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
            $p->with(['user'=>function($u){
                $u->select('id','first','last','email','phone');
            },'user_commission'=>function($c){
                $c->select('id','first','last','email','phone');
            }]);
        }])->find($this->id);
        return (Array) $this;
    }
}
