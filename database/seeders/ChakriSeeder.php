<?php

namespace Database\Seeders;

use App\Models\Chakri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChakriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chakri::factory(10)->create();
    }
}
