<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'name' => 'Budi',
                'nis' => '1001',
                'class_id' => 1,
            ],
            [
                'name' => 'Andi',
                'nis' => '1002',
                'class_id' => 1,
            ],
            [
                'name' => 'Caca',
                'nis' => '1003',
                'class_id' => 2,
            ],
        ]);
    }
}