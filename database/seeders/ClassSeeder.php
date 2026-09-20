<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('classes')->insert([
            ['name' => 'RPL 1', 'level' => 'X'],
            ['name' => 'RPL 2', 'level' => 'XI'],
            ['name' => 'RPL 3', 'level' => 'XII'],
        ]);
    }
}