<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('teams')->truncate();
        DB::table('teams')->insert([
            'name' => 'gamemaster',
            'password' => bcrypt('1234'),
            'isGM' => true,
        ]);
        foreach (range(1, 10) as $index) {
            DB::table('teams')->insert([
                'name' => $faker->colorName . '_' . random_int(1, 10),
                'password' => bcrypt('a'),
                'isGM' => false,
            ]);
        }
    }
}