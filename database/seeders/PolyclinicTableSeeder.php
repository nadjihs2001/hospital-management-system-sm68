<?php

namespace Database\Seeders;

use App\Models\Polyclinic;
use Illuminate\Database\Seeder;

class PolyclinicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Polyclinic::factory()->count(6)->create();
    }
}

