<?php namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Model\Services;
use App\Commands\Services\AvailableHoursCommand;



class ServicesController extends Controller {

    protected $request;
    protected $services;
    /**
     * Create a new controller instance.
     * @param Request $request
     * @param Services $services
     */
	public function __construct(Request $request,Services $services)
	{
		$this->middleware('auth');
        $this->request = $request;
        $this->services = $services;
        parent::__construct();
	}

    /**
     * Get Available Hours For The Selected Service
     */
    public function hours(){
      return json_encode($this->dispatchFrom(AvailableHoursCommand::class,$this->request));
    }

}
