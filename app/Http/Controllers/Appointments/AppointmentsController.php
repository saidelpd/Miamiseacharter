<?php namespace App\Http\Controllers\Appointments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Model\Appointments;
use App\Commands\Appointments\CalendarEventsCommand;
use App\Commands\Appointments\ViewCommand;


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
        $this->setupLayout("Create a New Reservation");
        return view('pages.appointments.create');
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
