<?php

namespace Database\Seeders;

use App\Models\Addresse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Addresse::truncate();

        Addresse::factory(5)->create();
    }
}
