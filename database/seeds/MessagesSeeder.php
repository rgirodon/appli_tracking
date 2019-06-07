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
        $faker = Faker::create();
        DB::table('messages')->truncate();
        foreach (range(1, 10) as $room_index) {
            foreach (range(1, 10) as $message_index) {
                $possible_team = [$room_index, 1]; // l'équipe N ou le gm (1),
                // pour que ce soit un message joueur ou gm au pif
                DB::table('messages')->insert([
                    'content' => join('', $faker->sentences(random_int(1, 5))),
                    'date' => $faker->dateTimeThisMonth(),
                    'room_id' => $room_index,
                    'team_id' => $possible_team[array_rand($possible_team)]
                ]);
            }
        }
    }
}
