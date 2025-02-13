<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Avaliacao;
use App\Models\Farmacia;

class AvaliacaoController extends Controller
{
    // Salvar uma nova avaliação
    public function store(Request $request, Farmacia $farmacia)
    {
        $validated = $request->validate([
            'nota' => 'required|integer|min:1|max:5',
            'comentario' => 'nullable|string',
        ]);

        $avaliacao = new Avaliacao();
        $avaliacao->farmacia_id = $farmacia->id;
        $avaliacao->user_id = Auth::id(); // Obter ID do usuário logado
        $avaliacao->nota = $validated['nota'];
        $avaliacao->comentario = $validated['comentario'];
        $avaliacao->save();

        return redirect()->back()->with('success', 'Avaliação enviada com sucesso!');
    }
}
