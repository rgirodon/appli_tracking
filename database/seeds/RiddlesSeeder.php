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
        DB::table('riddles')->truncate();
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            DB::table('riddles')->insert([
                'name' => $faker->sentence(random_int(2, 5)),
                'url' => $faker->url,
                'code' => $faker->randomNumber()
            ]);
        }
    }
}
