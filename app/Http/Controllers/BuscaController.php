<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farmacia;
use App\Models\Estoque;
use App\Models\Medicamento;

class BuscaController extends Controller
{
    // Realizar busca de medicamentos
    public function search(Request $request)
    {
        $nomeMedicamento = $request->input('nome');

        $medicamentos = Medicamento::where('nome', 'like', '%' . $nomeMedicamento . '%')->get();

        $resultados = [];

        foreach ($medicamentos as $medicamento) {
            $estoques = $medicamento->estoques()->with('farmacia')->get();

            foreach ($estoques as $estoque) {
                if ($estoque->quantidade > 0) {
                    $resultados[] = [
                        'farmacia' => $estoque->farmacia,
                        'medicamento' => $medicamento,
                        'quantidade' => $estoque->quantidade,
                    ];
                }
            }
        }

        return view('busca.resultados', compact('resultados'));
    }
}
