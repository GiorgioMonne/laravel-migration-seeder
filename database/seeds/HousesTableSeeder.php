<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\House;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i = 0 ; $i < 100; $i++){
            $house = new House();

        $house->nome = $faker->text(50);
        $house->locazione = $faker->streetAddress();
        $house->data_arrivo = $faker->dateTime();
        $house->data_partenza = $faker->dateTime();
        $house->costo_permanenza = $faker->randomFloat(2, 100, 300000000);

        $house ->save();
        }
    }
}
