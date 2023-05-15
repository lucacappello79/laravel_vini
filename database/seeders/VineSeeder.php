<?php

namespace Database\Seeders;

use App\Models\Vine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class VineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 15; $i++) {

            $newVine = new Vine();

            $newVine->name = $faker->name();
            $newVine->description = $faker->sentence();

            $newVine->save();
        }
    }
}
