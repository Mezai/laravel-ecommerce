<?php

namespace App\Http\Controllers\Back\Admin;

use App\Http\Controllers\Controller;
class SettingsController extends Controller {

	public function index()
	{
		return view('back.pages.settings');
	}

}