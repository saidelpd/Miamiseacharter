<?php namespace App\Http\Controllers\Appointments;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Model\Appointments;
use App\Http\Model\Services;
use App\Commands\Appointments\CalendarEventsCommand;
use App\Commands\Appointments\ViewCommand;
use App\Commands\Appointments\StoreCommand;
use App\Commands\Services\PriceCommand;

/**
 * Class AppointmentsController
 * Validation REQUEST
 */
use App\Http\Requests\Appointments\CreateRequest;

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

    /**
     *Create New Appointment
     */
    public function create()
    {
        $this->setupLayout("Create a New Reservation",['jquery-ui','appointments/create'],'https://js.stripe.com/v2/');
        $services = ['Select One']+Services::lists('name','id');
        $date = Carbon::now()->addDay()->format('m/d/Y');
        return view('pages.appointments.create')->with(compact('services','date'));
    }

    public function store(CreateRequest $create)
    {
         $price = $this->dispatchFromArray(PriceCommand::class,['id'=>$this->request->input('hours'),'currency'=>false]);
         $token = $this->request->input('stripe-token');
         $reponse = $this->dispatchFrom(StoreCommand::class,$this->request,compact('token','price'));
         if($reponse->has_error)
         {
             return redirect()->back()->withInput()->withErrors([
                 'custom_error' => $reponse->message,
             ]);
         }
        return redirect()->route('appointments.show',['id'=>$reponse->app_id]);
    }

    /**
     * @return view with calendar
     * @return \Illuminate\View\View
     */
    public function index()
	{
        $this->setupLayout("User Profile",['jquery-ui','moment','calendar','appointments/index']);
         return view('pages.appointments.index');
	}

    /**
     * Return Appointments base on date passed
     * @return mixed
     */
    public function getJson()
    {
      return $this->dispatch(new CalendarEventsCommand($this->request));
    }

    /**
     * View Select Appointment
     * @param $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $this->setupLayout("Viewing Reservation".$id);
        return view('pages.appointments.show')->with($this->dispatchFromArray(ViewCommand::class,compact('id')));
    }

}
