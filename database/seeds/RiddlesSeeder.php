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
        DB::table('riddles')->truncate();
        $faker = Faker::create();

        // amphi : ligne seule
        DB::table('riddles')->insert([
            'name' => 'L\'Amphithéâtre',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => 'http://51.75.126.46/Amphi/public/index.php/accueilAmphi',
            'code' => 0
        ]);

        // mootse : ligne seule
        DB::table('riddles')->insert([
            'name' => 'Mootse',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => 'http://51.75.126.46/html/escapegameTSE/Mooste/index.html',
            'code' => 0
        ]);

        // premier embranchement : ballade dans TSE
        DB::table('riddles')->insert([
            'name' => 'La Salle Newsplex',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => null,
            'code' => 0
        ]);
        DB::table('riddles')->insert([
            'name' => 'Les Objets de Téo',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => null,
            'code' => 0
        ]);
        DB::table('riddles')->insert([
            'name' => 'Les Voyages de Téo',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => null,
            'code' => 0
        ]);

        // fusion de l'embranchement : cours des matières
        DB::table('riddles')->insert([
            'name' => 'La Cour des Matières',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => 'http://51.75.126.46/html/escapegameTSE/public/CDM',
            'code' => 0
        ]);

        // embranchement 2 : la cité du design
        DB::table('riddles')->insert([
            'name' => 'La Tour', // + arcade (détecteur de distance)
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => null,
            'code' => 0
        ]);
        DB::table('riddles')->insert([
            'name' => 'Le Mixeur', // carré magique
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => 'http://51.75.126.46/html/escapegameTSE/CarreMagique/',
            'code' => 0
        ]);
        DB::table('riddles')->insert([
            'name' => 'La Fabrique de l\'Innovation', // code source
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => 'http://51.75.126.46/html/escapegameTSE/public/codesource',
            'code' => 0
        ]);

        // fusion de l'embranchement 2 : téléphone
        DB::table('riddles')->insert([
            'name' => 'Le Téléphone de Téo',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => 'http://51.75.126.46/html/escapegameTSE/public/telephone',
            'code' => 0
        ]);

        // énigme finale à l'incubateur
        DB::table('riddles')->insert([
            'name' => 'La Cour des Sciences',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => null,
            'code' => 0
        ]);
    }
}
