<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class RiddlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('riddles')->truncate();
        $faker = Faker::create();

        // mootse : ligne seule
        DB::table('riddles')->insert([
            'id' => 1,
            'name' => 'L\'Amphithéâtre',
            'description' => 'Connectez-vous à l\'intranet.',
            'post_resolution_message' => 'Bravo !!!',
            'url' => 'http://51.75.126.46/html/escapegameTSE/Mooste/index.html',
            'code' => 0,
            'line' => 1
        ]);

        // premier embranchement : ballade dans TSE
        DB::table('riddles')->insert([
            'id' => 2,
            'name' => 'CM Images et numérique en Newsplex',
            'description' => 'Trouvez les lettres cachées',
            'url' => null,
            'code' => 0,
            'line' => 2
        ]);

        DB::table('riddles')->insert([
            'id' => 3,
            'name' => 'Bureau des Associations',
            'description' => 'Trouvez les lettres cachées',
            'url' => null,
            'code' => 0,
            'line' => 2
        ]);
        DB::table('riddles')->insert([
            'id' => 4,
            'name' => 'TD synthèse d\'image en A119 (Bâtiment A)',
            'description' => 'Trouvez les lettres cachées',
            'url' => null,
            'code' => 0,
            'line' => 2
        ]);
        DB::table('riddles')->insert([
            'id' => 5,
            'name' => 'Rendez-vous à l\'administration',
            'description' => 'Trouvez les lettres cachées',
            'url' => null,
            'code' => 0,
            'line' => 2
        ]);

        /* Enigme supprimée         
        DB::table('riddles')->insert([
            'id' => 6,
            'name' => 'Révisions à la bibliothèque',
            'description' => 'Trouvez les lettres cachées',
            'url' => null,
            'code' => 0,
            'line' => 2
        ]);
        */

        // fusion de l'embranchement : cours des matières
        DB::table('riddles')->insert([
            'id' => 7,
            'name' => 'La Cour des Matières',
            'description' => 'Déchiffrez le code',
            'url' => 'http://51.75.126.46/html/escapegameTSE/public/CDM',
            'code' => 0,
            'line' => 3
        ]);

        // embranchement 2 : la cité du design
        DB::table('riddles')->insert([
            'id' => 8,
            'name' => 'La Tour', // + arcade (détecteur de distance)
            'description' => 'Trouvez une partie du numéro de Théo',
            'url' => null,
            'code' => 0,
            'line' => 4
        ]);
        DB::table('riddles')->insert([
            'id' => 9,
            'name' => 'Le Mixeur', // carré magique
            'description' => 'Trouvez une partie du numéro de Théo',
            'url' => 'http://51.75.126.46/html/escapegameTSE/CarreMagique/',
            'code' => 0,
            'line' => 4
        ]);
        DB::table('riddles')->insert([
            'id' => 10,
            'name' => 'La Fabrique de l\'Innovation', // code source
            'description' => 'Trouvez une partie du numéro de Théo',
            'url' => 'http://51.75.126.46/html/escapegameTSE/public/codesource',
            'code' => 0,
            'line' => 4
        ]);

        // fusion de l'embranchement 2 : téléphone
        DB::table('riddles')->insert([
            'id' => 11,
            'name' => 'Le Téléphone de Théo',
            'description' => 'Appelez Théo.',
            'url' => 'http://51.75.126.46/html/escapegameTSE/public/telephone',
            'code' => 0,
            'line' => 5
        ]);

        // énigme finale en D003,4,5,6
        DB::table('riddles')->insert([
            'id' => 12,
            'name' => 'D003',
            'description' => 'Retrouvez enfin Théo !',
            'url' => null,
            'code' => 0,
            'line' => 6
        ]);
        DB::table('riddles')->insert([
            'id' => 13,
            'name' => 'D004',
            'description' => 'Retrouvez enfin Théo !',
            'url' => null,
            'code' => 0,
            'line' => 6
        ]);
        DB::table('riddles')->insert([
            'id' => 14,
            'name' => 'D005',
            'description' => 'Retrouvez enfin Théo !',
            'url' => null,
            'code' => 0,
            'line' => 6
        ]);
        DB::table('riddles')->insert([
            'id' => 15,
            'name' => 'D006',
            'description' => 'Retrouvez enfin Théo !',
            'url' => null,
            'code' => 0,
            'line' => 6
        ]);
    }
}
