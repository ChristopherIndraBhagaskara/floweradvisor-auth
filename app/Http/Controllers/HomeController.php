<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('landing', [
			'name' => Auth::user()->name,
			'email' => Auth::user()->email,
		]);
	}

}
