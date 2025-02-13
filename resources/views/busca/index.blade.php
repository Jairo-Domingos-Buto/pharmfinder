@extends('layouts.layout');


@section('content')
    <h1 class="mb-4">Buscar Medicamento</h1>
    <form action="{{ route('busca.search') }}" method="POST" class="row g-3">
        @csrf
        <div class="col-md-8">
            <input type="text" name="nome" class="form-control" placeholder="Digite o nome do medicamento" required>
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </form>
@endsection
