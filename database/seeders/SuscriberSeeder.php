<?php

namespace Database\Seeders;

use App\Models\Suscriber;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SuscriberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Suscriber::factory()->count(10)->create();
    }
}
