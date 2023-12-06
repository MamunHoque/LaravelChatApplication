<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'password' => bcrypt('password'),
            'name' => 'Mamun Hoque',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
        ]);

        \App\Models\User::factory(50)->create();
    }
}
