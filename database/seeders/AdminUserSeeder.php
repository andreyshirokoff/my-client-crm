<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        AdminUser::create([
            'name' => 'MyClient',
            'password' => bcrypt('MyClient123@'),
            'email' => 'info@myclient.com',
            'status' => 'active',
            'type' => 'owner'
        ]);
    }
}
