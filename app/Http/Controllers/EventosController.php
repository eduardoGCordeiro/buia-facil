<?php

namespace BuiaFacil\Http\Controllers;

use BuiaFacil\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\Return_;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Evento::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
                'valorIngresso' => 'required',
                'endereco' => 'required|max:255|min:3|string',
                'cidade' => 'required|max:255|min:3|string',
                'pais' => 'required|max:255|min:3|string',
                'data' => 'required|date_format:Ymd',
                'particular' => 'required|boolean'
            ]);
            if ($validator->fails())
                return response($validator->errors(), 419);
            $evento = new Evento();
            $userid = Auth::id();
            $evento->fill($evento, ['usuario_idusuario' => $userid]);
            if ($evento->save())
                return response('Evento criado', 200);
            return response('Erro ao salvar evento', 419);


        } catch (\Exception $exception) {
            return response($exception->getMessage(), 401);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function edit($id)
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
    public
    function update(Request $request, $id)
    {
        try {
            $evento = Evento::find($id);
            $validator = Validator::make($request->all(), [
                'valorIngresso' => 'required',
                'endereco' => 'required|max:255|min:3|string',
                'cidade' => 'required|max:255|min:3|string',
                'pais' => 'required|max:255|min:3|string',
                'data' => 'required|date_format:Ymd',
                'particular' => 'required|boolean'
            ]);
            if ($validator->fails())
                return response($validator->errors(), 419);
            $evento->fill($request->all());
            $evento->save();
            return response('Evento atualizado', 200);
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
    public
    function destroy($id)
    {
        $evento = Evento::delete($id);
    }
}
