<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Farmacia extends Model
{
    // Tabela associada ao model
    protected $table = 'farmacias';

    // Campos que podem ser preenchidos em massa
    protected $fillable = ['nome', 'endereco', 'latitude', 'longitude', 'telefone', 'horario_funcionamento'];

    // Relação com a tabela estoque
    public function estoques()
    {
        return $this->hasMany(Estoque::class);
    }

    // Relação com a tabela avaliações
    public function avaliacoes()
    {
        return $this->hasMany(Avaliacao::class);
    }
}
