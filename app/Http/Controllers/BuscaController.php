<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farmacia;
use App\Models\Estoque;
use App\Models\Medicamento;

class BuscaController extends Controller
{
    // Realizar busca de medicamentos
    public function search(Request $request)
    {
        // Obter parâmetros da requisição
        $nomeMedicamento = $request->input('nome');
        $latitudeUsuario = $request->input('latitude');
        $longitudeUsuario = $request->input('longitude');
        $filtro = $request->input('filtro'); // Ex.: 'distancia', 'preco', 'avaliacao'
        $ordem = $request->input('ordem', 'asc'); // Ex.: 'asc' ou 'desc'

        // Buscar medicamentos que correspondem ao nome
        $medicamentos = Medicamento::where('nome', 'like', '%' . $nomeMedicamento . '%')->get();

        $resultados = [];

        foreach ($medicamentos as $medicamento) {
            $estoques = $medicamento->estoques()->with('farmacia')->get();

            foreach ($estoques as $estoque) {
                if ($estoque->quantidade > 0) {
                    $farmacia = $estoque->farmacia;

                    // Calcular distância apenas se as coordenadas estiverem disponíveis
                    if ($latitudeUsuario && $longitudeUsuario && $farmacia->latitude && $farmacia->longitude) {
                        $distancia = self::calcularDistancia(
                            $latitudeUsuario,
                            $longitudeUsuario,
                            $farmacia->latitude,
                            $farmacia->longitude
                        );

                        $farmacia->distancia = round($distancia, 2); // Arredondar para 2 casas decimais
                    }

                    // Calcular média de avaliações
                    $mediaAvaliacoes = $farmacia->avaliacoes()->avg('nota') ?? 0;
                    $farmacia->media_avaliacoes = round($mediaAvaliacoes, 1);

                    $resultados[] = [
                        'farmacia' => $farmacia,
                        'medicamento' => $medicamento,
                        'quantidade' => $estoque->quantidade,
                        'preco' => $estoque->preco, // Adicionando o preço do estoque
                    ];
                }
            }
        }

        // Aplicar filtro e ordenação
        if ($filtro === 'distancia' && isset($latitudeUsuario) && isset($longitudeUsuario)) {
            usort($resultados, function ($a, $b) use ($ordem) {
                return ($ordem === 'asc' ? 1 : -1) * ($a['farmacia']->distancia ?? 0 <=> $b['farmacia']->distancia ?? 0);
            });
        } elseif ($filtro === 'avaliacao') {
            usort($resultados, function ($a, $b) use ($ordem) {
                return ($ordem === 'asc' ? 1 : -1) * ($a['farmacia']->media_avaliacoes <=> $b['farmacia']->media_avaliacoes);
            });
        } elseif ($filtro === 'preco') {
            usort($resultados, function ($a, $b) use ($ordem) {
                return ($ordem === 'asc' ? 1 : -1) * ($a['preco'] <=> $b['preco']);
            });
        }

        return view('busca.resultados', compact('resultados', 'filtro', 'ordem'));
    }

    // Método para calcular a distância entre duas coordenadas geográficas
    private static function calcularDistancia($lat1, $lon1, $lat2, $lon2)
    {
        $raioTerra = 6371; // Raio da Terra em quilômetros

        $lat1 = deg2rad($lat1);
        $lon1 = deg2rad($lon1);
        $lat2 = deg2rad($lat2);
        $lon2 = deg2rad($lon2);

        $deltaLat = $lat2 - $lat1;
        $deltaLon = $lon2 - $lon1;

        $a = sin($deltaLat / 2) * sin($deltaLat / 2) +
             cos($lat1) * cos($lat2) *
             sin($deltaLon / 2) * sin($deltaLon / 2);

        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        $distancia = $raioTerra * $c;

        return $distancia; // Retorna a distância em quilômetros
    }
}
