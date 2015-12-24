<?php namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Http\Model\Services;

class FrontEndController extends Controller {
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $this->setupLayout('Miami Sea Charter',['instafeed','simplyscroll','jqueryScroll','lightbox','front/index']);
		$services = Services::all();
        //dd($services[0]->image);
        return view('pages.front.index')->with(compact('services'));
	}

}
