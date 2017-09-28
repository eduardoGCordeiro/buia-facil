<?php

namespace BuiaFacil;

use Illuminate\Database\Eloquent\Model;

class Convidado extends Model
{
    protected $table = "convidados";
    protected $fillable = [
        'user_id',
        'tem_permissao_convite',
        'festa_id'
    ];
}
