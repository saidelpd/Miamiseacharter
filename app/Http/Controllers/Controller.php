<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Helpers\HelperTrait;
use Auth,View;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests, HelperTrait;

    public $user;

    function __construct()
    {
        $this->user = null;
        if (Auth::check()) {
            $this->user = clone Auth::user();
        }
        View::share([
            'user' => $this->user,
        ]);
    }

}
