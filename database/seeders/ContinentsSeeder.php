<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Continent;

class ContinentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Continent::create(['continent_name' => 'Africa']);
        Continent::create(['continent_name' => 'Europe']);
        Continent::create(['continent_name' => 'Asia']);
        Continent::create(['continent_name' => 'Antarctica']);
        Continent::create(['continent_name' => 'Australia']);
        Continent::create(['continent_name' => 'North America']);
        Continent::create(['continent_name' => 'South America']);

    }
}
