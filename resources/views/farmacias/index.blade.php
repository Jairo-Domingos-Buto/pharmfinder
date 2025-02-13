@extends('layouts.layout')

@section('content')
    <h1 class="mb-4">Lista de Farmácias</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($farmacias as $farmacia)
                <tr>
                    <td>{{ $farmacia->nome }}</td>
                    <td>{{ $farmacia->endereco }}</td>
                    <td>
                        <a href="{{ route('farmacias.show', $farmacia->id) }}" class="btn btn-sm btn-info">Ver Detalhes</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
