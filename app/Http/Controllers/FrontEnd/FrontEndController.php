<?php namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;

class FrontEndController extends Controller {
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$this->setupLayout('Miami Sea Charter',['instafeed','simplyscroll','jqueryScroll','lightbox','front/index']);
        return view('pages.front.index');
	}

}
