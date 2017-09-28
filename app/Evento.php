<?php

namespace BuiaFacil;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{

    protected $table = "festas";


    protected $fillable = [
        'user_id',
        'valor_ingresso',
        'endereco',
        'cidade',
        'pais',
        'data',
        'particular',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
