<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    //tabela associada a model
    protected $table='medicamentos';

    //campos que podem ser preenchidos em massa
    protected $fillable=['nome','descricao'];

    //relacao com a tabela estoque
    public function estoques()
    {
        return $this->hasMany(Estoque::class);
    }
}
