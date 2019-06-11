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

        // amphi : ligne seule
        DB::table('riddles')->insert([
            'name' => 'L\'Amphithéâtre',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => 'http://51.75.126.46/Amphi/public/index.php/accueilAmphi',
            'code' => 0,
            'line' => 1
        ]);

        // mootse : ligne seule
        DB::table('riddles')->insert([
            'name' => 'Mootse',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => 'http://51.75.126.46/html/escapegameTSE/Mooste/index.html',
            'code' => 0,
            'line' => 2
        ]);


        // premier embranchement : ballade dans TSE
        DB::table('riddles')->insert([
            'name' => 'La Salle Newsplex',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => null,
            'code' => 0,
            'line' => 3
        ]);

        DB::table('riddles')->insert([
            'name' => 'Bureau des Associations',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => null,
            'code' => 0,
            'line' => 3
        ]);
        DB::table('riddles')->insert([
            'name' => 'Les Objets de Théo',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => null,
            'code' => 0,
            'line' => 3
        ]);
        DB::table('riddles')->insert([
            'name' => 'Les Voyages de Théo',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => null,
            'code' => 0,
            'line' => 3
        ]);

        DB::table('riddles')->insert([
            'name' => 'Bibliothèque',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => null,
            'code' => 0,
            'line' => 3
        ]);

        // fusion de l'embranchement : cours des matières
        DB::table('riddles')->insert([
            'name' => 'La Cour des Matières',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => 'http://51.75.126.46/html/escapegameTSE/public/CDM',
            'code' => 0,
            'line' => 4
        ]);

        // embranchement 2 : la cité du design
        DB::table('riddles')->insert([
            'name' => 'La Tour', // + arcade (détecteur de distance)
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => null,
            'code' => 0,
            'line' => 5
        ]);
        DB::table('riddles')->insert([
            'name' => 'Le Mixeur', // carré magique
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => 'http://51.75.126.46/html/escapegameTSE/CarreMagique/',
            'code' => 0,
            'line' => 5
        ]);
        DB::table('riddles')->insert([
            'name' => 'La Fabrique de l\'Innovation', // code source
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => 'http://51.75.126.46/html/escapegameTSE/public/codesource',
            'code' => 0,
            'line' => 5
        ]);

        // fusion de l'embranchement 2 : téléphone
        DB::table('riddles')->insert([
            'name' => 'Le Téléphone de Théo',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => 'http://51.75.126.46/html/escapegameTSE/public/telephone',
            'code' => 0,
            'line' => 6
        ]);

        // énigme finale à l'incubateur
        DB::table('riddles')->insert([
            'name' => 'Incumbateur',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => null,
            'code' => 0,
            'line' => 7
        ]);


    }
}
