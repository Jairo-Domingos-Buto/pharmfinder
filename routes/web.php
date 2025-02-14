<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\FarmaciaController;
use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\AvaliacaoController;
use App\Http\Controllers\BuscaController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Página inicial
Route::get('/', function () {
    return view('index');
})->name('home');

// Página inicial com campo de busca

Route::get('/buscar', function () {
    return view('busca.index');
})->name('pesquisa');

// Realizar busca de medicamentos
Route::post('/busca', [BuscaController::class, 'search'])->name('busca.search');

// Rotas para Medicamentos (CRUD)
Route::resource('medicamentos', MedicamentoController::class)->middleware('auth');

// Rotas para Farmácias (CRUD)
Route::resource('farmacias', FarmaciaController::class)->middleware('auth');

// Rotas para Estoque (CRUD)
Route::resource('estoques', EstoqueController::class)->middleware('auth');

// Rotas para Avaliações (CRUD)
Route::resource('avaliacoes', AvaliacaoController::class)->middleware('auth');

// Rota personalizada para salvar avaliação de uma farmácia
Route::post('/farmacias/{farmacia}/avaliar', [AvaliacaoController::class, 'store'])
    ->middleware('auth')
    ->name('farmacias.avaliar');

// Rota para listar avaliações de uma farmácia específica
Route::get('/farmacias/{farmacia}/avaliacoes', [AvaliacaoController::class, 'listByFarmacia'])
    ->middleware('auth')
    ->name('avaliacoes.listByFarmacia');

// Dashboard administrativo (apenas para administradores)
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

// Interface da farmácia (apenas para usuários com papel "farmacia")
Route::middleware(['auth', 'role:farmacia'])->group(function () {
    Route::get('/farmacia/estoque', [EstoqueController::class, 'index'])->name('farmacia.estoque.index');
    Route::get('/farmacia/detalhes', [FarmaciaController::class, 'show'])->name('farmacia.detalhes.show');
});

// Rotas de autenticação e perfil do usuário (Laravel Breeze)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Incluir rotas de autenticação padrão do Laravel
require __DIR__.'/auth.php';
