<?php namespace App\Http\Controllers\Appointments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Model\Appointments;
use App\Commands\Appointments\CalendarEventsCommand;


use App\Http\Model\Payments;
use App\Http\Model\Services;
use App\Http\Model\Boats;
use Carbon\Carbon;

class AppointmentsController extends Controller {

    protected $request;
    protected $appointments;

    /**
     * Create a new controller instance.
     * @param Request $request
     * @param Appointments $appointments
     */
	public function __construct(Request $request,Appointments $appointments)
	{
		$this->middleware('auth');
        $this->request = $request;
        $this->appointments = $appointments;
        parent::__construct();
	}


	public function index()
	{
     /*   $faker = \Faker\Factory::create('en_US');

        // DB::table('appointments')->delete();
        $payments = Payments::all();
        foreach ($payments as $pay)
        {
            $date = Carbon::create('2015',$faker->numberBetween(6,7),$faker->numberBetween(1,30));
            $service = Services::with('times')->where('id',$faker->numberBetween(1,6))->first();
            $boat = $this->GetFreeBoat($date,$service);
            dd($boat);
            Appointments::create([
                'payments_id' => $pay->id,
                'services_id' => $service->id,
                'boat_id' => (isset($boat->id))? $boat->id : 2,
                'start' => $this->start_time,
                'end' => $this->end_time
            ]);
        }*/
        $this->setupLayout("User Profile",['jquery-ui','moment','calendar','appointments/index']);
         return view('pages.appointments.index');
	}

    public function GetFreeBoat(Carbon $date,$service)
    {

        if(count($service->times))
        {
            foreach($service->times as $timesAllow)
            {
                $time = $timesAllow->GetTime($date);
                if($boat = Boats::getFree($time['start'], $time['end']))
                {
                    $this->start_time = $time['start'];
                    $this->end_time = $time['end'];
                    return $boat;
                }
            }
            $this->GetFreeBoat($date->addDay(),$service);
        }
        $service = Services::with('times')->where('id',1)->first();
        $this->GetFreeBoat($date->addDay(),$service);
    }


    public function getJson()
    {
      return $this->dispatch(new CalendarEventsCommand($this->request));
    }

}
