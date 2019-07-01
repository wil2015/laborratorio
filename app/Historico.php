<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    //
    protected $fillable = ['data_inicio', 'data_fim', 'data_inicio', 'usuario', 'observacao', 'quantidade_de_amostras', 'equipamento_id'];
}
