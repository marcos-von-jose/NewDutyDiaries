<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{

    public function run(): void
    {
        $name = 'Admin' .Str::random(5);
        $email = 'marcos@example.com';
        $role = 1;

        DB::table('users')->insert ([
            [
                'name' => $name,
                'email' => $email,
                'role' => $role,
                'password' => Hash::make('taehomot'),
                'remember_token' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
