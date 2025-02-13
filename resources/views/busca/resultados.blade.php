<h1 class="mb-4">Resultados da Busca</h1>

<p>Filtrado por:
    @if (isset($filtro) && $filtro !== '')
        {{ ucfirst($filtro) }}
    @else
        Sem filtro
    @endif
</p>

@if (count($resultados) > 0)
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Farmácia</th>
                <th>Medicamento</th>
                <th>Quantidade</th>
                <th>Distância (km)</th>
                <th>Avaliação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($resultados as $resultado)
                <tr>
                    <td>{{ $resultado['farmacia']->nome }}</td>
                    <td>{{ $resultado['medicamento']->nome }}</td>
                    <td>{{ $resultado['quantidade'] }}</td>
                    <td>{{ $resultado['farmacia']->distancia ?? 'N/A' }}</td>
                    <td>{{ $resultado['farmacia']->media_avaliacoes ?? 'N/A' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>Nenhum resultado encontrado.</p>
@endif
