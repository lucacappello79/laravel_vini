<?php

namespace Database\Seeders;

use App\Models\Wine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class WineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; $i++) {

            $newWine = new Wine();

            $newWine->name = $faker->name();
            $newWine->year = $faker->year();
            $newWine->winery = $faker->company();
            $newWine->color = $faker->colorName();
            $newWine->type = $faker->name();
            $newWine->alcohol_content = $faker->numberBetween(5, 40);
            $newWine->extract = $faker->randomFloat(2, 15, 45);
            $newWine->acidity = $faker->randomFloat(2, 4, 10);

            $newWine->save();
        }
    }
}
