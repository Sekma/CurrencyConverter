<?php

namespace Database\Seeders;

use App\Models\Currency;
use App\Models\Pairs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PairsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exchangeRatios = [
            ['currency_1_id' => 1, 'currency_2_id' => 2, 'exchange' => 0.99],
            ['currency_1_id' => 1, 'currency_2_id' => 3, 'exchange' => 2.01],
            ['currency_1_id' => 1, 'currency_2_id' => 1, 'exchange' => 1.50],
          
        ];

        foreach ($exchangeRatios as $ratio) {
            Pairs::create($ratio);
        }
    }
}
