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
        Continent::insert([
            ['continent_name' => 'Africa'],
            ['continent_name' => 'Europe'],
            ['continent_name' => 'Asia'],
            ['continent_name' => 'Antarctica'],
            ['continent_name' => 'Australia'],
            ['continent_name' => 'North America'],
            ['continent_name' => 'South America']
        ]);

    }
}
