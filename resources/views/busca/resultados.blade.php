@extends('layouts.layout')

@section('resultado')
    <h1 class="mb-4">Resultados da Busca</h1>

    @if (count($resultados) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Farmácia</th>
                    <th>Medicamento</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($resultados as $resultado)
                    <tr>
                        <td>{{ $resultado['farmacia']->nome }}</td>
                        <td>{{ $resultado['medicamento']->nome }}</td>
                        <td>{{ $resultado['quantidade'] }}</td>
                        <td>
                            <a href="{{ route('farmacias.show', $resultado['farmacia']->id) }}" class="btn btn-sm btn-info">Detalhes</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Nenhum resultado encontrado.</p>
    @endif
@endsection
