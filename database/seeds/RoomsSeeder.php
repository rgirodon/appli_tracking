<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->delete();
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            DB::table('rooms')->insert([
                'name' => $faker->catchPhrase,
            ]);
        }
    }
}
