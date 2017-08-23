<?php

namespace BuiaFacil\Http\Controllers\Auth;

use BuiaFacil\User;
use BuiaFacil\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \BuiaFacil\User
     */
    protected function create(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required|max:255',
            'dataNascimento' => 'required|date',
            'email' => 'required|unique|max:255',
            'cpf' => 'required|unique|max:11',
            'password' => 'required|unique|max:255'
        ]);
         $user = new User();
         $user->fill($request->all());
         $user->save();
         return response(null,200);
    }
}
