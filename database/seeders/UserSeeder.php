<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('permissions')->insert([
            ['name' => 'insert', 'guard_name' => 'web'],
            ['name' => 'update', 'guard_name' => 'web'],
            ['name' => 'delete', 'guard_name' => 'web'],
            ['name' => 'view', 'guard_name' => 'web']
        ]);

        DB::table('roles')->insert([
            ['name' => 'developer', 'guard_name' => 'web'],
            ['name' => 'admin', 'guard_name' => 'web'],
            ['name' => 'client', 'guard_name' => 'web'],
            ['name' => 'retailer', 'guard_name' => 'web'],
        ]);

        DB::table('users')->insert([
           [
            'name' => 'developer',
            'email' => 'developer@developer.com',
            'password' => Hash::make('12345678'),
            'email_verified_at' => now(),
           ],
           [
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
            'email_verified_at' => now(),
           ],
           [
            'name' => 'client',
            'email' => 'client@client.com',
            'password' => Hash::make('12345678'),
            'email_verified_at' => now(),
           ],
           [
            'name' => 'Retailer',
            'email' => 'retailer@retailer.com',
            'password' => Hash::make('12345678'),
            'email_verified_at' => now(),
           ]
        ]);

        DB::table('role_has_permissions')->insert([
            ['permission_id' => 1, 'role_id' => 1],
            ['permission_id' => 2, 'role_id' => 1],
            ['permission_id' => 3, 'role_id' => 1],
            ['permission_id' => 4, 'role_id' => 1],
        ]);

        DB::table('model_has_roles')->insert([
            [
                'role_id' => 1,
                'model_id' => 1,
                'model_type' => 'App\Models\User'
            ],
            [
                'role_id' => 2,
                'model_id' => 2,
                'model_type' => 'App\Models\User'
            ],
            [
                'role_id' => 3,
                'model_id' => 3,
                'model_type' => 'App\Models\User'
            ],
            [
                'role_id' => 4,
                'model_id' => 4,
                'model_type' => 'App\Models\User'
            ]
        ]);

        DB::table('model_has_permissions')->insert([
            [
                'permission_id' => 1,
                'model_id' => 1,
                'model_type' => 'App\Models\User'
            ],
            [
                'permission_id' => 2,
                'model_id' => 1,
                'model_type' => 'App\Models\User'
            ],
            [
                'permission_id' => 3,
                'model_id' => 1,
                'model_type' => 'App\Models\User'
            ],
            [
                'permission_id' => 4,
                'model_id' => 1,
                'model_type' => 'App\Models\User'
            ],
            [
                'permission_id' => 1,
                'model_id' => 2,
                'model_type' => 'App\Models\User'
            ],
            [
                'permission_id' => 2,
                'model_id' => 2,
                'model_type' => 'App\Models\User'
            ],
            [
                'permission_id' => 3,
                'model_id' => 2,
                'model_type' => 'App\Models\User'
            ],
            [
                'permission_id' => 4,
                'model_id' => 2,
                'model_type' => 'App\Models\User'
            ]
        ]);
    }
}