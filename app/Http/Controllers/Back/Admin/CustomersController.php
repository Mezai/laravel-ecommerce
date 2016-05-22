<?php

namespace App\Http\Controllers\Back\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCustomerRequest;
use App\Models\User;
use Hash;

class CustomersController extends Controller
{
	public function index()
	{
		$customers = User::paginate(10);
		
        return view('back.pages.customers.index', ['customers' => $customers, 'pagination' => $customers]);
	}

	public function show($id)
	{
		$customer = User::findOrFail($id);

		return view('back.pages.customers.show', compact('customer'));
	}

	public function edit($id)
	{
		$customer = User::findOrFail($id);

		return view('back.pages.customers.edit', compact('customer'));
	}

	public function create()
	{
		return view('back.pages.customers.create');
	}

	public function destroy($id)
	{
		$customer = User::findOrFail($id);

		$customer->delete();

		flash('Customer successfully deleted', 'success');

		return redirect('admin/customers');
	}

	public function store(CreateCustomerRequest $request)
	{
		User::create([
			'name' => $request->name,
			'username' => $request->username,
			'email' => $request->email,
			'password' => Hash::make($request->password),
		]);

		flash('User successfully created', 'success');	

		return redirect('admin/customers');
	}


}