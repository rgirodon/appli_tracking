<?php

use Illuminate\Database\Seeder;

class RoomTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // le gm est dans toutes les rooms et chaque équipe est dans la room de même indice
        DB::table('rooms_teams')->truncate();
        foreach (range(1, 10) as $index) {
            DB::table('rooms_teams')->insert([
                'team_id' => 1,
                'room_id' => $index
            ]);
            if ($index > 1) {
                DB::table('rooms_teams')->insert([
                    'team_id' => $index,
                    'room_id' => $index
                ]);
            }
        }
    }
}
