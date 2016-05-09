<?php

namespace App\Http\Controllers\Back\Auth;

use App\Admin;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;


class AuthController extends Controller
{
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectTo = 'admin/dashboard';

    protected $redirectAfterLogout = 'admin/login';

    protected $guard = 'admin';

    public function showLoginForm()
    {
        if (Auth::guard('admin')->check())
        {
            return redirect('admin/dashboard');
        }
        
        return view('back.auth.login');
    }
    
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
