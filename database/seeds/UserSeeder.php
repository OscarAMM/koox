<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'=> 'Administrator',
            'email' => 'admin@example.com', 
            'password'=>bcrypt('secret12'),
            'status'=>'enable',
        ]);
        $user->assignRole('Administrador');
    }
}
