{{-- <form action="{{ route('busca.search') }}" method="POST" class="row g-3">
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
--}}
<!DOCTYPE html>
<html lang="pt">

<head>
    <title>PharmFinder - Encontre medicamentos próximos a você</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{asset('resources/css/busca.css')}} />

<body>
    <header>
        <div class="logo" onclick="window.location.href='/'">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="white">
                <path
                    d="M20 6h-4V4c0-1.1-.9-2-2-2h-4c-1.1 0-2 .9-2 2v2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zM10 4h4v2h-4V4zm6 11h-3v3h-2v-3H8v-2h3v-3h2v3h3v2z" />
            </svg>
            <h1>PharmFinder</h1>
        </div>

        <nav class="nav-container">
            <a href="login" class="nav-link">Login</a>
            <a href="register" class="nav-link">Cadastrar Farmácia</a>
            <a href=""></a>
        </nav>
    </header>

    <main class="container">
        <section class="search-box">
            <form class="search-form"  method="POST" action="{{ route('busca.search') }}" id="searchForm">
                <input type="text" name="nome" placeholder="Digite o nome do medicamento" required>
{{--                 <input type="text" placeholder="Digite seu endereço ou CEP" required> --}}
                <button type="submit">Buscar</button>
            </form>


             <!-- Filtro -->
    <div class="col-md-2">
        <select name="filtro" class="form-select">
            <option value="">Sem Filtro</option>
            <option value="distancia">Distância</option>
            <option value="avaliacao">Avaliação</option>
            <option value="preco">Preço</option>
        </select>
    </div>
{{--
            <div class="filter-options">
                <button class="filter-btn active" value="" data-filter="all">Todos</button>
                <button class="filter-btn" data-filter="price">Menor Preço</button>
                <button class="filter-btn" data-filter="distance">Mais Próximo</button>
                <button class="filter-btn" data-filter="rating">Melhor Avaliação</button>
            </div> --}}
             <!-- Ordem -->
    <div class="col-md-1">
        <select name="ordem" class="form-select">
            <option value="asc">Crescente</option>
            <option value="desc">Decrescente</option>
        </select>
    </div>
        </section>

        <section class="results" id="resultsContainer">
            <!-- Results will be inserted here via JavaScript -->
        </section>
    </main>


</body>

</html>

<script src='Assets/js/dashboard.js'></script>


</body>

</html>
