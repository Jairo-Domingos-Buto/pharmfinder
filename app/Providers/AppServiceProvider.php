<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Verificar se os papéis já existem antes de criá-los
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $farmaciaRole = Role::firstOrCreate(['name' => 'farmacia']);
        $userRole = Role::firstOrCreate(['name' => 'user']);

        // Verificar se as permissões já existem antes de criá-las
        Permission::firstOrCreate(['name' => 'gerenciar-medicamentos']);
        Permission::firstOrCreate(['name' => 'gerenciar-farmacias']);
        Permission::firstOrCreate(['name' => 'gerenciar-usuarios']);
        Permission::firstOrCreate(['name' => 'visualizar-avaliacoes']);
        Permission::firstOrCreate(['name' => 'atualizar-estoque']);

        // Atribuir permissões aos papéis
        $adminRole->givePermissionTo(Permission::all());
        $farmaciaRole->givePermissionTo(['atualizar-estoque', 'visualizar-avaliacoes']);
    }
}
