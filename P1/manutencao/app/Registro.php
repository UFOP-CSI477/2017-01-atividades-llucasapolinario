<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $fillable = ['equipamento_id', 'descricao', 'datalimite', 'tipo'];
}
