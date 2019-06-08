<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RiddlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('riddles')->delete();
        DB::table('riddles_riddles')->delete();

        DB::table('riddles')->insert([
            'id' => 1,
            'name' => 'Énigme de l\'amphithéâtre',
            'code' => '1234',
            'url' => 'http://51.75.126.46/Amphi/public/index.php/accueilAmphi'
        ]);
        DB::table('riddles')->insert([
            'id' => 2,
            'name' => 'Énigme du Newsplex',
            'code' => '1234',
            'url' => 'http://51.75.126.46/html/escapegameTSE/Mooste/index.html'
        ]);

        DB::table('riddles_riddles')->insert([
            'parent_id' => 1,
            'child_id' => 2
        ]);
    }
}
