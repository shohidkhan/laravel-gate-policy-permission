<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     "password"=>"123",
        //     "is_admin"=>true,
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'user',
        //     'email' => 'user@gmail.com',
        //     "password"=>"123",
        //     "is_admin"=>false,
        // ]);

        \App\Models\Role::factory()->create([
            "name"=>"admin",
        ]);
        \App\Models\Role::factory()->create([
            "name"=>"editor",
        ]);
        \App\Models\Role::factory()->create([
            "name"=>"user",
        ]);

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            "password"=>"123",
            "role_id"=>1
        ]);

        \App\Models\User::factory()->create([
            'name' => 'editor',
            'email' => 'editor@gmail.com',
            "password"=>"123",
            "role_id"=>2
        ]);

        \App\Models\User::factory()->create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            "password"=>"123",
            "role_id"=>3
        ]);

         $this->call(TaskSeeder::class);
    }
}
