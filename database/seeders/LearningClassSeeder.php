<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LearningClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('learning_classes')->insert([
            'class_code' => 'LEC',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('learning_classes')->insert([
            'class_code' => 'SMA10',
            'module_code' => '10',
            'description' => 'Edi Harsono, S.Ag',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('learning_classes')->insert([
            'class_code' => 'SMA11',
            'module_code' => '11',
            'description' => 'Edi Harsono, S.Ag',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('learning_classes')->insert([
            'class_code' => 'SMA12',
            'module_code' => '12',
            'description' => 'Edi Harsono, S.Ag',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('learning_classes')->insert([
            'class_code' => 'SMK10',
            'module_code' => '10',
            'description' => 'Harris, Ag',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('learning_classes')->insert([
            'class_code' => 'SMK11 ',
            'module_code' => '11',
            'description' => 'Harris, S.Ag',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('learning_classes')->insert([
            'class_code' => 'SMK12',
            'module_code' => '12',
            'description' => 'Harris, S.Ag',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('learning_classes')->insert([
            'class_code' => 'REGULER',
            'module_code' => 'REGULER',
            'description' => 'Ishak',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
