<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
  // n->1  || cidade->estado
    public function estado()
    {
      return $this->belongsTo('App\Estado');
    }

    public function aluno()
    {
      return $this->hasMany('App\Aluno');
    }
}
