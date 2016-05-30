<?php
namespace App\Http\Controllers\Front\User;
use App\Http\Controllers\Controller;
use App\Models\User;

use Auth;
class AddressController extends Controller {
	

	public function index()
	{
		$user = Auth::User();
		$userId = $user->id;

		$address = User::find($userId)->address;

		return view('front.user.pages.address.index', ['address' => $address]);
	}

}