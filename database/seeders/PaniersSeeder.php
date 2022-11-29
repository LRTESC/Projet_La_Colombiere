<?php

namespace Database\Seeders;

use App\Models\Panier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaniersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Panier::truncate();

        Panier::factory(5)->create();
    }
}
