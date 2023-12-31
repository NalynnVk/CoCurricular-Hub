<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // rujuk user model
        DB::table('users')->insert([
            'name' => 'admin',
            // 'matric_id' => 'cb20000',
            'email' => 'admin@admin.com',
            // 'phone_number' => '0000000000',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ]);
    }
}
