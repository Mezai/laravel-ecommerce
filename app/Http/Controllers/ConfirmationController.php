<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

class ConfirmationController extends Controller {

	
	public function success()
	{
		return view('front.pages.confirmation');
	}

	public function failed()
	{
		return view('front.pages.failed');
	}
}