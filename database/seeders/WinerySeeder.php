<?php

namespace Database\Seeders;

use App\Models\Winery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class WinerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 15; $i++) {

            $newWinery = new Winery();

            $newWinery->name = $faker->name();
            $newWinery->address = $faker->streetAddress();
            $newWinery->municipality = $faker->city();
            $newWinery->province = $faker->city();
            $newWinery->region = $faker->state();
            $newWinery->country = $faker->country();
            $newWinery->phone_number = $faker->phoneNumber();
            $newWinery->mail = $faker->email();

            $newWinery->save();
        }
    }
}
