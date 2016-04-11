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

    public function showRegistrationForm()
    {
        return view('back.auth.register');
    }

    public function resetPassword()
    {
        return view('back.auth.passwords.email');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }

    public function postLogin()
    {
        // validate the info, create rules for the inputs
        $rules = array(
            'email'    => 'required|email', // make sure the email is an actual email
            'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
        );
        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);
        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::to('login')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {
            // create our user data for the authentication
            $userdata = array(
                'email'    => Input::get('email'),
                'password'    => Input::get('password')
            );
            // attempt to do the login
            if (Auth::guard('admin')->attempt()) {
                return redirect('admin/dashboard');
            } else {
                // validation not successful, send back to form
                return redirect('admin');
            }
        }
    }
}
