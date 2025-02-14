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
        // Validar entrada
        $validated = $request->validate([
            'nota' => 'required|integer|min:1|max:5',
            'comentario' => 'nullable|string|max:500',
        ]);

        // Verificar se o usuário está logado
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Faça login para avaliar.');
        }

        // Verificar se o usuário já avaliou esta farmácia
        $avaliacaoExistente = Avaliacao::where('farmacia_id', $farmacia->id)
            ->where('user_id', auth()->user()->id)
            ->first();

        if ($avaliacaoExistente) {
            return redirect()->route('farmacias.show', $farmacia->id)
                ->with('error', 'Você já avaliou esta farmácia.');
        }

        // Criar avaliação
        $avaliacao = new Avaliacao();
        $avaliacao->farmacia_id = $farmacia->id;
        $avaliacao->user_id = auth()->user()->id; // ID do usuário logado
        $avaliacao->nota = $validated['nota'];
        $avaliacao->comentario = $validated['comentario'] ?? null;
        $avaliacao->save();

        return redirect()->route('farmacias.show', $farmacia->id)
            ->with('success', 'Avaliação enviada com sucesso!');
    }
}
