<form action="{{ route('busca.search') }}" method="POST" class="row g-3">
    @csrf

    <!-- Campo de busca -->
    <div class="col-md-8">
        <input type="text" name="nome" class="form-control" placeholder="Digite o nome do medicamento" required>
    </div>

    <!-- Filtro -->
    <div class="col-md-2">
        <select name="filtro" class="form-select">
            <option value="">Sem Filtro</option>
            <option value="distancia">Distância</option>
            <option value="avaliacao">Avaliação</option>
            <option value="preco">Preço</option>
        </select>
    </div>

    <!-- Ordem -->
    <div class="col-md-1">
        <select name="ordem" class="form-select">
            <option value="asc">Crescente</option>
            <option value="desc">Decrescente</option>
        </select>
    </div>

    <!-- Botão de envio -->
    <div class="col-md-1">
        <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
</form>
