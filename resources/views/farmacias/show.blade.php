@extends('layouts.layout')

@section('content')
    <h1 class="mb-4">{{ $farmacia->nome }}</h1>
    <p><strong>Endereço:</strong> {{ $farmacia->endereco }}</p>
    <p><strong>Telefone:</strong> {{ $farmacia->telefone }}</p>
    <p><strong>Horário de Funcionamento:</strong> {{ $farmacia->horario_funcionamento }}</p>

    <h2 class="mt-4">Estoque de Medicamentos</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Medicamento</th>
                <th>Quantidade</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($farmacia->estoques as $estoque)
                <tr>
                    <td>{{ $estoque->medicamento->nome }}</td>
                    <td>{{ $estoque->quantidade }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2 class="mt-4">Avaliações</h2>
    <ul>
        @foreach ($farmacia->avaliacoes as $avaliacao)
            <li>
                <strong>Nota:</strong> {{ $avaliacao->nota }}<br>
                <strong>Comentário:</strong> {{ $avaliacao->comentario }}
            </li>
        @endforeach
    </ul>

    <h2 class="mt-4">Deixe sua Avaliação</h2>
    <form action="{{ route('avaliacoes.store', $farmacia->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nota" class="form-label">Nota (1-5):</label>
            <input type="number" name="nota" id="nota" class="form-control" min="1" max="5" required>
        </div>
        <div class="mb-3">
            <label for="comentario" class="form-label">Comentário:</label>
            <textarea name="comentario" id="comentario" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar Avaliação</button>
    </form>
@endsection
