<?php

namespace BuiaFacil;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{

    protected $table = "festa";


    protected $fillable = [
        'users_idusuario',
        'valorIngresso',
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
