<?php

namespace BuiaFacil\Http\Controllers\Auth;

use BuiaFacil\User;
use BuiaFacil\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
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
    protected function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'nome' => 'required|string|max:255|min:3|alpha',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
                'cpf' => 'required|size:11|unique:users',
                'data_de_nascimento' => 'required|date_format:Ymd'
            ]);
            if ($validator->fails())
                return response($validator->errors(), 419);

            $user = new User();
            $user->fill($request->all());
            $user->password = sha1($request->password);
            $user->save();

            return response('Usuário criado', 200);
        } catch (\Exception $exception) {
            return response($exception->getMessage(), 401);
        }
    }
}
