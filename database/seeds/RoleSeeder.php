<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'Director']);
        Role::create(['name' => 'Administrador']);
        Role::create(['name' => 'Validador']);
        Role::create(['name' => 'Coordinador']);
        Role::create(['name' => 'Consultor']);
    }
}
