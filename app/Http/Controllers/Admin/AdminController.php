<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller {

    /**
     * Create a new controller instance.
     *
     */
	public function __construct()
	{
		$this->middleware('auth');
        parent::__construct();
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $this->setupLayout("Dashboard", ['flot','flot-resize','flot-time','flot-tooltip','flot-orderBars', 'admin/dashboard']);
		return view('pages.admin.dashboard');
	}

}
