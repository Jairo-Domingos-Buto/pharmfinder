<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    /**
     *Listar todos os medicamentos
     */
    public function index()
    {
        $medicamentos = Medicamento::all();
        return view('medicamentos.index', compact('medicamentos'));
    }

    /**
     * Mostrar o formulario para cadastrar um novo medicamento
     */
    public function create()
    {
        return view('medicamentos.create');
    }

    /**
     * Salvar um novo medicamento criado
     */
    public function store(Request $request)
    {
        //calida os dados vindos da requisicao
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
        ]);

        Medicamento::create($validated);

        return redirect()->route('medicamentos.index')->with('success', 'Medicamento criado com sucesso!');
    }

    /**
     * DExibe detalhes de um medicamento
     */
    public function show(Medicamento $medicamento)
    {
        return view('medicamentos.show', compact('medicamento'));
    }

    /**
     * Exibe um formulario para fazer a edicao de um medimamento
     */
    public function edit(string $id)
    {
        return view('medicamentos.edit', compact('medicamento'));
    }

    /**
     * Atualiza um medicamento
     */
    public function update(Request $request, Medicamento $medicamento)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
        ]);

        $medicamento->update($validated);

        return redirect()->route('medicamentos.index')->with('success', 'Medicamento atualizado com sucesso!');
    }

    // Excluir um medicamento
    public function destroy(Medicamento $medicamento)
    {
        $medicamento->delete();

        return redirect()->route('medicamentos.index')->with('success', 'Medicamento excluído com sucesso!');
    }
}
