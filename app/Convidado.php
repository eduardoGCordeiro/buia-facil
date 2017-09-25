<?php

namespace BuiaFacil;

use Illuminate\Database\Eloquent\Model;

class Convidado extends Model
{
    protected $table = "convidado";
    protected $fillable = [
        'users_idusuario',
        'temPermissaoParaConvite',
        'festa_idfesta'
    ];
}
