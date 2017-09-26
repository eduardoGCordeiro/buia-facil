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
        $this->middleware('guest')->only('store');
        $this->middleware('auth:api')->only('logout');
    }

    public function store(Request $request) {
        $credentials = ['email' => $request->email, 'password' => sha1($request->password)];
        if (!Auth::attempt($credentials))
            return response('Unauthorised', 401);

        $token = Auth::user()->createToken('API_TOKEN', [])->accessToken;
        return response(compact('token'), 200);
    }

    public function logout(Request $request) {
        $request->user()->token()->revoke();
        $request->user()->token()->delete();

        return response('Signed Out', 200);
    }
}
