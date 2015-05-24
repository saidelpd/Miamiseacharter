<?php namespace App\Commands\Appointments;

use App\Commands\Command;
use Carbon\Carbon;
use Illuminate\Contracts\Bus\SelfHandling;
use App\Http\Model\Appointments;
use Validator;

class CalendarEventsCommand extends Command implements SelfHandling
{

    public $startDate;
    public $endDate;

    function __construct($request)
    {
    $this->startDate = ($request->start)? Carbon::createFromFormat('Y-m-d', $request->start)->startOfDay() : Carbon::now()->startOfDay();
    $this->endDate = ($request->end)? Carbon::createFromFormat('Y-m-d', $request->end)->endOfDay() : Carbon::now()->addDays(7)->endOfDay();
    }

    /**
     * Execute the command.
     * @return void
     */
    public function handle()
    {
      $appointments = Appointments::byDate( $this->startDate, $this->endDate)->has('boat')->with('boat')->get();
       $events = $appointments->map(function($app){
           $values = [
               "title" => "Boat: " .$app->boat->name,
               "start" => $app->start->toRfc3339String(),
               "end" => $app->end->toRfc3339String()
           ];
          return $values;
       });
       return $events->toJson();
    }
}
