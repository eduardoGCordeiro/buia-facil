<?php

namespace BuiaFacil\Http\Controllers\Auth;

use BuiaFacil\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest')->except('logout');
    }

    public function store(Request $request) {
        $credentials = array('email' => $request->email, 'password' => sha1($request->password));
        if (Auth::attempt($credentials)) {
            $token = Auth::user()->createToken('API_Token')->accessToken;

            return response(compact('token'), 200);
        }

        return response("Unauthorised", 401);
    }

    public function logout() {
    }
}
