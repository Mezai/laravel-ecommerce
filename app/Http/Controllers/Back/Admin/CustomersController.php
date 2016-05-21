<?php

namespace App\Http\Controllers\Back\Admin;

use App\Http\Controllers\Controller;
use App\User;


class CustomersController extends Controller
{
	public function index()
	{
		$customers = User::paginate(10);
		
        return view('back.pages.customers.index', ['customers' => $customers, 'pagination' => $customers]);
	}

	public function show()
	{
		# code...
	}

	public function edit()
	{
		# code...
	}

	public function create()
	{
		return view('back.pages.customers.create');
	}


}