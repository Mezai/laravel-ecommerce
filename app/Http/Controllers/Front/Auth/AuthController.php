<?php

namespace App\Http\Controllers\Front\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
	use AuthenticatesAndRegistersUsers, ThrottlesLogins;

	protected $redirectTo = '/dashboard';

	protected $redirectAfterLogout = '/';

	
}