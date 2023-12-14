<?php

namespace Database\Seeders;

use App\Models\Classification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Classification::truncate();
        Classification::create([
            'classification'=>'Cardiac drugs'
        ]);
        Classification::create([
            'classification'=>'Kidney drugs'
        ]);

    }
}
