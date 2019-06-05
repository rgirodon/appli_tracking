<?php

use Illuminate\Database\Seeder;

class RiddleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('riddles')->delete();
        DB::table('riddles')->insert([
            'name' => 'enigmeTest1',
            'code' => '1234',
        ]);
    }
}
