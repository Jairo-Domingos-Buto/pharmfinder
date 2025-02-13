<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    // Tabela associada ao model
    protected $table = 'estoque';

    // Campos que podem ser preenchidos em massa
    protected $fillable = ['farmacia_id', 'medicamento_id', 'quantidade'];

    // Relação com a tabela farmacias
    public function farmacia()
    {
        return $this->belongsTo(Farmacia::class);
    }

    // Relação com a tabela medicamentos
    public function medicamento()
    {
        return $this->belongsTo(Medicamento::class);
    }
}
