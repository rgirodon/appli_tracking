<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->delete();
        DB::table('teams')->insert([
            'name' => 'gamemaster',
            'password' => bcrypt('1234'),
            'isGM' => true,
        ]);
        DB::table('teams')->insert([
            'name' => 'didier',
            'password' => bcrypt('1234'),
            'isGM' => false,
        ]);
    }
}
