<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Profile;
class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
            'profile_name'=> 'Oscar',
            'profile_content' => 'admin@example.com', 
            'profile_status'=>'enable',
        ]);
    }
}
