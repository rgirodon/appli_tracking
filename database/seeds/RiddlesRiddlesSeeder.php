<?php

use Illuminate\Database\Seeder;

class RiddlesRiddlesSeeder extends Seeder
{
    /*
       1	L'Amphithéâtre
       2	Mootse
       3	La Salle Newsplex
       4	Les Objets de Téo
       5	Les Voyages de Téo
       6	La Cour des Matières
       7	La Tour
       8	Le Mixeur
       9	La Fabrique de l'Innovation
       10	Le Téléphone de Téo
       11	La Cour des Sciences
     */
    public function run()
    {
        DB::table('riddles_riddles')->truncate();

        // amphi : ligne seule
        DB::table('riddles_riddles')->insert([
            'parent_id' => 0,
            'child_id' => 1
        ]);

        // mootse : ligne seule
        DB::table('riddles_riddles')->insert([
            'parent_id' => 1,
            'child_id' => 2
        ]);

        // premier embranchement : ballade dans TSE
        DB::table('riddles_riddles')->insert([
            'parent_id' => 2,
            'child_id' => 3
        ]);
        DB::table('riddles_riddles')->insert([
            'parent_id' => 2,
            'child_id' => 4
        ]);
        DB::table('riddles_riddles')->insert([
            'parent_id' => 2,
            'child_id' => 5
        ]);

        // fusion de l'embranchement : cours des matières
        DB::table('riddles_riddles')->insert([
            'parent_id' => 3,
            'child_id' => 6
        ]);
        DB::table('riddles_riddles')->insert([
            'parent_id' => 4,
            'child_id' => 6
        ]);
        DB::table('riddles_riddles')->insert([
            'parent_id' => 5,
            'child_id' => 6
        ]);

        // embranchement 2 : la cité du design
        DB::table('riddles_riddles')->insert([
            'parent_id' => 6,
            'child_id' => 7
        ]);
        DB::table('riddles_riddles')->insert([
            'parent_id' => 6,
            'child_id' => 8
        ]);
        DB::table('riddles_riddles')->insert([
            'parent_id' => 6,
            'child_id' => 9
        ]);

        // fusion de l'embranchement 2 : téléphone
        DB::table('riddles_riddles')->insert([
            'parent_id' => 7,
            'child_id' => 10
        ]);
        DB::table('riddles_riddles')->insert([
            'parent_id' => 8,
            'child_id' => 10
        ]);
        DB::table('riddles_riddles')->insert([
            'parent_id' => 9,
            'child_id' => 10
        ]);

        // énigme finale à l'incubateur
        DB::table('riddles_riddles')->insert([
            'parent_id' => 10,
            'child_id' => 11
        ]);
    }
}
