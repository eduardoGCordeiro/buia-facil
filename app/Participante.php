<?php

namespace BuiaFacil;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    protected $fillable = ['user_id', 'festa_id', 'hora_entrada', 'presenca'];
}
