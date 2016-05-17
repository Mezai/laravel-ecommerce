<?php

namespace App\Http\Controllers\Back\Admin;

use App\Http\Controllers\Controller;
use App\User;


class CustomersController extends Controller
{
	public function index()
	{
		$customers = User::all();
        return view('back.pages.customers.index', compact('customers'));
	}

	public function show()
	{
		# code...
	}

	public function edit()
	{
		# code...
	}


}