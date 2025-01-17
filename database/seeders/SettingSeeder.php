<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as FacadesDB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            'title'         => 'Laravel',
            'phone'         => '123456789',
            'email'         => 'admin@admin.com',
            'name'          => 'Admin',
            'copyright'     => 'Copyright © 2022 Laravel. All rights reserved.',
            'description'   => "Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience",
            'address'       => 'Cairo, Egypt',
            'keywords'      => 'Laravel, Framework, PHP',
            'author'        => 'Laravel',
            'created_at'    => FacadesDB::raw('CURRENT_TIMESTAMP'),
            'updated_at'    => FacadesDB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
