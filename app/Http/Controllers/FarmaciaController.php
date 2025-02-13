<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farmacia;

class FarmaciaController extends Controller
{
    // Listar todas as farmácias
    public function index()
    {
        $farmacias = Farmacia::all();
        return view('farmacias.index', compact('farmacias'));
    }

    // Exibir formulário para criar uma nova farmácia
    public function create()
    {
        return view('farmacias.create');
    }

    // Salvar uma nova farmácia
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'endereco' => 'required|string',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'telefone' => 'nullable|string',
            'horario_funcionamento' => 'nullable|string',
        ]);

        Farmacia::create($validated);

        return redirect()->route('farmacias.index')->with('success', 'Farmácia criada com sucesso!');
    }

    // Exibir detalhes de uma farmácia
    public function show(Farmacia $farmacia)
    {
        return view('farmacias.show', compact('farmacia'));
    }

    // Exibir formulário para editar uma farmácia
    public function edit(Farmacia $farmacia)
    {
        return view('farmacias.edit', compact('farmacia'));
    }

    // Atualizar uma farmácia
    public function update(Request $request, Farmacia $farmacia)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'endereco' => 'required|string',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'telefone' => 'nullable|string',
            'horario_funcionamento' => 'nullable|string',
        ]);

        $farmacia->update($validated);

        return redirect()->route('farmacias.index')->with('success', 'Farmácia atualizada com sucesso!');
    }

    // Excluir uma farmácia
    public function destroy(Farmacia $farmacia)
    {
        $farmacia->delete();

        return redirect()->route('farmacias.index')->with('success', 'Farmácia excluída com sucesso!');
    }
}
