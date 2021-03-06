<?php

namespace BuiaFacil\Http\Controllers;

use BuiaFacil\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return response()->json(User::all());
        } catch (\Exception $exception) {
            response($exception->getMessage(), 419);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(User::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = $request->user();
        try {
            $validator = Validator::make($request->all(), [
                'nome' => 'required|string|max:255|alpha|min:3',
                'email' => 'required|string|email|max:255|unique:users',
                'data_de_nascimento' => 'required|date_format:Ymd'
            ]);
            if ($validator->fails())
                return response($validator->errors(), 419);
            $user->fill($request->all());
            $user->save();
            return response('Usuário atualizado', 200);
        } catch (\Exception $exception) {
            return response($exception->getMessage(), 401);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            User::delete($id);
            return resolve('Usuário deletado', 200);
        } catch (\Exception $exception) {
            return response($exception->getMessage(), 401);
        }
    }
}
