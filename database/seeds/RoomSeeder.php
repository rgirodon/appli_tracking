<?php

use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->delete();
        DB::table('rooms')->insert([
            'name' => 'test_room'
        ]);

        DB::table('rooms_teams')->insert([
            'team_id' => 1,
            'room_id' => 1
        ]);
    }
}
