<?php

use Illuminate\Database\Seeder;

class RiddlesRiddlesSeeder extends Seeder
{
    /*
       1	L'Amphithéâtre
       2	Mootse
       3	La Salle Newsplex
       4	Bureau des Associations
       5	Les Objets de Théo
       6	Les Voyages de Théo
       7	Bibliothèque
       8	La Cour des Matières
       9	La Tour
       10	Le Mixeur
       11	La Fabrique de l'Innovation
       12	Le Téléphone de Téo
       13	La Cour des Sciences

     */
    public function run()
    {
        DB::table('riddles_riddles')->truncate();

        // amphi : ligne seule

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
        DB::table('riddles_riddles')->insert([
            'parent_id' => 2,
            'child_id' => 6
        ]);
        DB::table('riddles_riddles')->insert([
            'parent_id' => 2,
            'child_id' => 7
        ]);

        // fusion de l'embranchement : cours des matières
        DB::table('riddles_riddles')->insert([
            'parent_id' => 3,
            'child_id' => 8
        ]);
        DB::table('riddles_riddles')->insert([
            'parent_id' => 4,
            'child_id' => 8
        ]);
        DB::table('riddles_riddles')->insert([
            'parent_id' => 5,
            'child_id' => 8
        ]);
        DB::table('riddles_riddles')->insert([
            'parent_id' => 6,
            'child_id' => 8
        ]);
        DB::table('riddles_riddles')->insert([
            'parent_id' => 7,
            'child_id' => 8
        ]);

        // embranchement 2 : la cité du design
        DB::table('riddles_riddles')->insert([
            'parent_id' => 8,
            'child_id' => 9
        ]);
        DB::table('riddles_riddles')->insert([
            'parent_id' => 8,
            'child_id' => 10
        ]);
        DB::table('riddles_riddles')->insert([
            'parent_id' => 8,
            'child_id' => 11
        ]);

        // fusion de l'embranchement 2 : téléphone
        DB::table('riddles_riddles')->insert([
            'parent_id' => 9,
            'child_id' => 12
        ]);
        DB::table('riddles_riddles')->insert([
            'parent_id' => 10,
            'child_id' => 12
        ]);
        DB::table('riddles_riddles')->insert([
            'parent_id' => 11,
            'child_id' => 12
        ]);

        // énigme Téléphone Théo
        DB::table('riddles_riddles')->insert([
            'parent_id' => 12,
            'child_id' => 13
        ]);
    }
}
