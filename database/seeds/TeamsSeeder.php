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
            'name' => 'admin',
            'password' => bcrypt('default'),
            'grade' => 2,
        ]);
        DB::table('teams')->insert([
            'name' => 'gamemaster',
            'password' => bcrypt('1234'),
            'grade' => 1,
        ]);
    }
}