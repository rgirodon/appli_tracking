<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class MessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->delete();
        $faker = Faker::create();
        //TODO réparer MessagesSeeder
//        foreach (range(1, 10) as $index) {
//            DB::table('messages')->insert([
//                'content' => $faker->sentences(random_int(1, 5)),
//                'date' => $faker->dateTimeThisMonth(),
//                // TODO de vrais id des tables correspondantes
//                'room_id' => random_int(1,3),
//                'team_id' => random_int(1, 3)
//            ]);
//        }
    }
}
