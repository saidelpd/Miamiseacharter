<?php namespace App\Http\Controllers\Appointments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Model\Appointments;

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
        $this->setupLayout("User Profile",['jquery-ui','moment','calendar','appointments/index']);
         return view('pages.appointments.index');
         //dd($this->appointments->find(45));
	}

}
