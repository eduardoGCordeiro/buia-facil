<?php

namespace BuiaFacil\Http\Controllers;

use BuiaFacil\Participante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ParticipanteController extends Controller
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
                'festa_idfesta' => 'required',
                'horaEntrouNaFesta' => 'required|alpha|max:1'
            ]);
            if ($validator->fails())
                return response($validator->errors(), '419');
            $participante = new Participante();
            $userid = $request->user()->idusuario;
            $participante->fill($request->all());
            $participante->user_idusuario = $userid;
            $participante->save();
        } catch (\Exception $exception) {
            return response($exception->getMessage(), '401');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \BuiaFacil\Participante $participante
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        return
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \BuiaFacil\Participante $participante
     * @return \Illuminate\Http\Response
     */
    public function edit(Participante $participante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \BuiaFacil\Participante $participante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Participante $participante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \BuiaFacil\Participante $participante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participante $participante)
    {
        //
    }
}
