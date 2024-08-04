<?php

namespace Database\Seeders;

use App\Models\Currency;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // d'abord on crée les devises
        $this->call(CurrencyTableSeeder::class);
    

        // puis on les associera 
        $this->call(PairsTableSeeder::class);
    }
}