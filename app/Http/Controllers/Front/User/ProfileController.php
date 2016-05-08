<?php

namespace App\Http\Controllers\Front\User;


use App\Http\Controllers\Controller;
use App\Http\Controllers\Front\User\UpdateProfileRequest;


class ProfileController extends Controller
{
	public function edit()
	{
		return view('front.user.profile.edit')
			->withUser(access()->user());
	}
}