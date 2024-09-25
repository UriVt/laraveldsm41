<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrimerSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Juan Pérez',
                'email' => 'juan@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password123'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Más datos...
        ]);
    }
}
