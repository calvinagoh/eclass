<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClassAssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('class_assignments')->insert([
            'class_code' => 'SMA10',
            'title' => 'TUGAS 1',
            'description' => 'kerjakan tugas berikut',
            'type' => 'TUGAS',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('class_assignments')->insert([
            'class_code' => 'SMA10',
            'title' => 'UJIAN 1',
            'description' => 'Kerjakan Soal berikut',
            'type' => 'UJIAN',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
