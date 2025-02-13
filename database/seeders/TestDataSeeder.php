<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Medicamento;
use App\Models\Farmacia;
use App\Models\Estoque;
use App\Models\Avaliacao;

class TestDataSeeder extends Seeder
{
    public function run()
    {
        // Criar medicamentos
        $medicamento1 = Medicamento::create([
            'nome' => 'Paracetamol',
            'descricao' => 'Analgésico e antitérmico.'
        ]);

        $medicamento2 = Medicamento::create([
            'nome' => 'Ibuprofeno',
            'descricao' => 'Anti-inflamatório não esteroidal.'
        ]);

        $medicamento3 = Medicamento::create([
            'nome' => 'Omeprazol',
            'descricao' => 'Inibidor da bomba de prótons.'
        ]);

        // Criar farmácias
        $farmacia1 = Farmacia::create([
            'nome' => 'Drogaria Saúde',
            'endereco' => 'Rua das Flores, 123',
            'latitude' => -23.5678,
            'longitude' => -46.6543,
            'telefone' => '94342433',
            'horario_funcionamento' => '08:00 - 20:00'
        ]);

        $farmacia2 = Farmacia::create([
            'nome' => 'Farmácia Bem-Estar',
            'endereco' => 'Avenida Paulista, 456',
            'latitude' => -23.5612,
            'longitude' => -46.6523,
            'telefone' => '923438344',
            'horario_funcionamento' => '07:00 - 22:00'
        ]);

        $farmacia3 = Farmacia::create([
            'nome' => 'DrogaMais',
            'endereco' => 'Rua Augusta, 789',
            'latitude' => -23.5701,
            'longitude' => -46.6567,
            'telefone' => '965346245',
            'horario_funcionamento' => '09:00 - 19:00'
        ]);

        // Criar estoques
        Estoque::create([
            'farmacia_id' => $farmacia1->id,
            'medicamento_id' => $medicamento1->id,
            'quantidade' => 50,
            'preco' => 10.99
        ]);

        Estoque::create([
            'farmacia_id' => $farmacia1->id,
            'medicamento_id' => $medicamento2->id,
            'quantidade' => 30,
            'preco' => 15.49
        ]);

        Estoque::create([
            'farmacia_id' => $farmacia2->id,
            'medicamento_id' => $medicamento1->id,
            'quantidade' => 40,
            'preco' => 11.99
        ]);

        Estoque::create([
            'farmacia_id' => $farmacia2->id,
            'medicamento_id' => $medicamento3->id,
            'quantidade' => 20,
            'preco' => 25.99
        ]);

        Estoque::create([
            'farmacia_id' => $farmacia3->id,
            'medicamento_id' => $medicamento2->id,
            'quantidade' => 25,
            'preco' => 14.99
        ]);

        // Criar avaliações
      /*   Avaliacao::create([
            'farmacia_id' => $farmacia1->id,
            'user_id' => 1, // Substitua pelo ID do usuário logado
            'nota' => 5,
            'comentario' => 'Excelente atendimento!'
        ]);

        Avaliacao::create([
            'farmacia_id' => $farmacia2->id,
            'user_id' => 1, // Substitua pelo ID do usuário logado
            'nota' => 4,
            'comentario' => 'Bom serviço, mas preços altos.'
        ]);

        Avaliacao::create([
            'farmacia_id' => $farmacia3->id,
            'user_id' => 1, // Substitua pelo ID do usuário logado
            'nota' => 3,
            'comentario' => 'Atendimento razoável.'
        ]); */
    }
}
