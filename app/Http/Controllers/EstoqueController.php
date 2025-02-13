<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estoque;
use App\Models\Farmacia;
use App\Models\Medicamento;

class EstoqueController extends Controller
{
    // Listar todos os registros de estoque
    public function index()
    {
        $estoques = Estoque::all();
        return view('estoques.index', compact('estoques'));
    }

    // Exibir formulário para criar um novo registro de estoque
    public function create()
    {
        $farmacias = Farmacia::all();
        $medicamentos = Medicamento::all();
        return view('estoques.create', compact('farmacias', 'medicamentos'));
    }

    // Salvar um novo registro de estoque
    public function store(Request $request)
    {
        $validated = $request->validate([
            'farmacia_id' => 'required|exists:farmacias,id',
            'medicamento_id' => 'required|exists:medicamentos,id',
            'quantidade' => 'required|integer|min:0',
        ]);

        Estoque::create($validated);

        return redirect()->route('estoques.index')->with('success', 'Registro de estoque criado com sucesso!');
    }

    // Atualizar um registro de estoque
    public function update(Request $request, Estoque $estoque)
    {
        $validated = $request->validate([
            'quantidade' => 'required|integer|min:0',
        ]);

        $estoque->update($validated);

        return redirect()->route('estoques.index')->with('success', 'Registro de estoque atualizado com sucesso!');
    }

    // Excluir um registro de estoque
    public function destroy(Estoque $estoque)
    {
        $estoque->delete();

        return redirect()->route('estoques.index')->with('success', 'Registro de estoque excluído com sucesso!');
    }
}
