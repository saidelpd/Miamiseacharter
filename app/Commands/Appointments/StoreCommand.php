<?php namespace App\Commands\Appointments;

use App\Commands\Command;
use Carbon\Carbon;
use Illuminate\Contracts\Bus\SelfHandling;
use App\Http\Model\Appointments;
use App\Http\Model\Services;



class StoreCommand extends Command implements SelfHandling
{
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

        return (Array) $this;
    }


}
