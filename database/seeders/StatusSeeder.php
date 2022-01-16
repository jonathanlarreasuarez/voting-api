<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('status')->insert([
            ['st_name' => 'Active', 'st_acronym' => 'acti', 'created_at' => now(), 'updated_at' => now()],
            ['st_name' => 'Deactivate', 'st_acronym' => 'deac', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
