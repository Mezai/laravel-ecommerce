<?php


namespace App\Http\Controllers\Admin;

use App\Admin;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;
use App\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AuthController extends Controller
{
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectTo = 'admin/dashboard';
    protected $guard = 'admin';

    public function showLoginForm()
    {
        if (Auth::guard('admin')->check()) {
            return redirect('/admin');
        }

        return view('back.auth.login');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
