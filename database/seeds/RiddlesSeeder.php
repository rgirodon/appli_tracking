<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RiddlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('riddles')->delete();
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            DB::table('riddles')->insert([
                'name' => $faker->sentence(random_int(5, 15)),
                'url' => $faker->url,
                'code' => $faker->randomNumber()
            ]);
        }
    }
}
