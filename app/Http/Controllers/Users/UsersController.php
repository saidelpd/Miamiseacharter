<?php namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Commands\Users\ProfileCommand;

class UsersController extends Controller {

    protected $request;

    /**
     * Create a new controller instance.
     * @param Request $request
     */
	public function __construct(Request $request)
	{
		$this->middleware('auth');
        $this->request = $request;
        parent::__construct();
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function profile()
	{
        if($this->request->isMethod('post'))
        {
        return ($profile = $this->dispatch(new ProfileCommand($this->request,$this->user))) ? view('pages.users.profile')->withErrors($profile) : view('pages.users.profile')->withSuccess(true);
        }
        $this->setupLayout("User Profile");
		return view('pages.users.profile');
	}

}
