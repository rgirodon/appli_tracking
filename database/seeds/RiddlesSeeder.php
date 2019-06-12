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
            'name' => 'L\'Amphithéâtre',
            'description' => 'Connectez-vous à l\'intranet.',
            'url' => 'http://51.75.126.46/html/escapegameTSE/Mooste/index.html',
            'code' => 0,
            'line' => 1
        ]);

        // premier embranchement : ballade dans TSE
        DB::table('riddles')->insert([
            'name' => 'CM Images et numérique en Newsplex',
            'description' => 'Trouvez les lettres cachées',
            'url' => null,
            'code' => 0,
            'line' => 2
        ]);

        DB::table('riddles')->insert([
            'name' => 'Bureau des Associations',
            'description' => 'Trouvez les lettres cachées',
            'url' => null,
            'code' => 0,
            'line' => 2
        ]);
        DB::table('riddles')->insert([
            'name' => 'TD synthèse d\'image en A119 (Bâtiment A)',
            'description' => 'Trouvez les lettres cachées',
            'url' => null,
            'code' => 0,
            'line' => 2
        ]);
        DB::table('riddles')->insert([
            'name' => 'Rendez-vous à l\'administration',
            'description' => 'Trouvez les lettres cachées',
            'url' => null,
            'code' => 0,
            'line' => 2
        ]);

        DB::table('riddles')->insert([
            'name' => 'Révisions à la bibliothèque',
            'description' => 'Trouvez les lettres cachées',
            'url' => null,
            'code' => 0,
            'line' => 2
        ]);

        // fusion de l'embranchement : cours des matières
        DB::table('riddles')->insert([
            'name' => 'La Cour des Matières',
            'description' => 'Déchiffrez le code',
            'url' => 'http://51.75.126.46/html/escapegameTSE/public/CDM',
            'code' => 0,
            'line' => 3
        ]);

        // embranchement 2 : la cité du design
        DB::table('riddles')->insert([
            'name' => 'La Tour', // + arcade (détecteur de distance)
            'description' => 'Trouvez une partie du numéro de Théo',
            'url' => null,
            'code' => 0,
            'line' => 4
        ]);
        DB::table('riddles')->insert([
            'name' => 'Le Mixeur', // carré magique
            'description' => 'Trouvez une partie du numéro de Théo',
            'url' => 'http://51.75.126.46/html/escapegameTSE/CarreMagique/',
            'code' => 0,
            'line' => 4
        ]);
        DB::table('riddles')->insert([
            'name' => 'La Fabrique de l\'Innovation', // code source
            'description' => 'Trouvez une partie du numéro de Théo',
            'url' => 'http://51.75.126.46/html/escapegameTSE/public/codesource',
            'code' => 0,
            'line' => 4
        ]);

        // fusion de l'embranchement 2 : téléphone
        DB::table('riddles')->insert([
            'name' => 'Le Téléphone de Théo',
            'description' => 'Appelez Théo.',
            'url' => 'http://51.75.126.46/html/escapegameTSE/public/telephone',
            'code' => 0,
            'line' => 5
        ]);

        // énigme finale à l'incubateur
        DB::table('riddles')->insert([
            'name' => 'L\'Incubateur',
            'description' => 'Retrouvez enfin Théo !',
            'url' => null,
            'code' => 0,
            'line' => 6
        ]);


    }
}
