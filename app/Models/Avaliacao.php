<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    // Tabela associada ao model
    protected $table = 'avaliacoes';

    // Campos que podem ser preenchidos em massa
    protected $fillable = ['farmacia_id', 'user_id', 'nota', 'comentario'];

    // Relação com a tabela farmacias
    public function farmacia()
    {
        return $this->belongsTo(Farmacia::class);
    }

    // Relação com a tabela users
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
