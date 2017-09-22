<?php

namespace BuiaFacil\Http\Controllers;

use BuiaFacil\Convidado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ConvidadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        try {
            $validator = Validator::make($request->all(), [
                'temPermissaoParaConvite' => 'required|bool',
                'users_idusuario' => 'required|integer',
                'festa_idfesta' => 'required|integer'
            ]);
            if ($validator->fails())
                return response($validator->errors(), '419');
            $convidado = new Convidado();
            $convidado->fill($request->all());
            $convidado->save();
            return response('Usuário convidado', 200);
        } catch (\Exception $exception) {
            return response($exception->getMessage(), '401');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \BuiaFacil\Convidado $convidado
     * @return \Illuminate\Http\Response
     */
    public function show(Convidado $convidado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \BuiaFacil\Convidado $convidado
     * @return \Illuminate\Http\Response
     */
    public function edit(Convidado $convidado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \BuiaFacil\Convidado $convidado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Convidado $convidado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \BuiaFacil\Convidado $convidado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Convidado $convidado)
    {
        //
    }
}
