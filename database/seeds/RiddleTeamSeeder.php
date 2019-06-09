<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class RiddleTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('riddles_teams')->truncate();
        $faker = Faker::create();

        // des énigmes que l'équipe rouge 1 à déja faites...
        DB::table('riddles_teams')->insert([
            'team_id' => 12,
            'riddle_id' => 1,
            'start_date' => DateTime::createFromFormat(DateTimeInterface::W3C, '2000-01-01T01:00:00+00:00'),
            'end_date' => DateTime::createFromFormat(DateTimeInterface::W3C, '2000-01-01T02:00:00+00:00')
        ]);
        DB::table('riddles_teams')->insert([
            'team_id' => 12,
            'riddle_id' => 2,
            'start_date' => DateTime::createFromFormat(DateTimeInterface::W3C, '2000-01-01T02:00:00+00:00'),
            'end_date' => DateTime::createFromFormat(DateTimeInterface::W3C, '2000-01-01T03:00:00+00:00')
        ]);
        DB::table('riddles_teams')->insert([
            'team_id' => 12,
            'riddle_id' => 3,
            'start_date' => DateTime::createFromFormat(DateTimeInterface::W3C, '2000-01-01T03:00:00+00:00'),
            'end_date' => DateTime::createFromFormat(DateTimeInterface::W3C, '2000-01-01T04:00:00+00:00')
        ]);
        DB::table('riddles_teams')->insert([
            'team_id' => 12,
            'riddle_id' => 4,
            'start_date' => DateTime::createFromFormat(DateTimeInterface::W3C, '2000-01-01T04:00:00+00:00'),
            'end_date' => DateTime::createFromFormat(DateTimeInterface::W3C, '2000-01-01T05:00:00+00:00')
        ]);
        DB::table('riddles_teams')->insert([
            'team_id' => 12,
            'riddle_id' => 5,
            'start_date' => DateTime::createFromFormat(DateTimeInterface::W3C, '2000-01-01T05:00:00+00:00'),
            'end_date' => DateTime::createFromFormat(DateTimeInterface::W3C, '2000-01-01T06:00:00+00:00')
        ]);
        DB::table('riddles_teams')->insert([
            'team_id' => 12,
            'riddle_id' => 6,
            'start_date' => DateTime::createFromFormat(DateTimeInterface::W3C, '2000-01-01T06:00:00+00:00'),
            'end_date' => DateTime::createFromFormat(DateTimeInterface::W3C, '2000-01-01T07:00:00+00:00')
        ]);
        DB::table('riddles_teams')->insert([
            'team_id' => 12,
            'riddle_id' => 7,
            'start_date' => DateTime::createFromFormat(DateTimeInterface::W3C, '2000-01-01T07:00:00+00:00'),
            'end_date' => DateTime::createFromFormat(DateTimeInterface::W3C, '2000-01-01T08:00:00+00:00')
        ]);
        DB::table('riddles_teams')->insert([
            'team_id' => 12,
            'riddle_id' => 8,
            'start_date' => DateTime::createFromFormat(DateTimeInterface::W3C, '2000-01-01T08:00:00+00:00'),
            'end_date' => DateTime::createFromFormat(DateTimeInterface::W3C, '2000-01-01T09:00:00+00:00')
        ]);
        DB::table('riddles_teams')->insert([
            'team_id' => 12,
            'riddle_id' => 9,
            'start_date' => DateTime::createFromFormat(DateTimeInterface::W3C, '2000-01-01T09:00:00+00:00'),
            'end_date' => DateTime::createFromFormat(DateTimeInterface::W3C, '2000-01-01T10:00:00+00:00')
        ]);
    }
}
