<?php

use Illuminate\Database\Seeder;

class RiddlesRiddlesSeeder extends Seeder
{
    /*
       1	Amphithéâtre
       2	Mootse
       3	Cour des matières
       4	CodeSource
       5	Téléphone
       6	Carré Magique
       7	Newsplex
       8	Les objets de Téo
       9	Les voyages de Téo
       10	Téo à l'étranger
       11	La tour
       12	Le mixeur
       13	L'arcade
       14	La fabrique de l'innovation
       15	Le mixeur
       16	La cour des sciences
     */
    public function run()
    {
        DB::table('riddles_riddles')->truncate();
        DB::table('riddles_riddles')->insert([
            'parent_id' => 0,
            'child_id' => 1
        ]);
        DB::table('riddles_riddles')->insert([
            'parent_id' => 1,
            'child_id' => 2
        ]);
        DB::table('riddles_riddles')->insert([
            'parent_id' => 0,
            'child_id' => 1
        ]);
    }
}
