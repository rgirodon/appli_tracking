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
        // ajout des énigmes connues
        DB::table('riddles')->insert([
            'name' => 'Amphithéâtre',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => 'http://51.75.126.46/Amphi/public/index.php/accueilAmphi',
            'code' => 0
        ]);
        DB::table('riddles')->insert([
            'name' => 'Mootse',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => 'http://51.75.126.46/html/escapegameTSE/Mooste/index.html',
            'code' => 0
        ]);

        DB::table('riddles')->insert([
            'name' => 'Cour des matières',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => 'http://51.75.126.46/html/escapegameTSE/public/CDM',
            'code' => 0
        ]);
        DB::table('riddles')->insert([
            'name' => 'CodeSource',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => 'http://51.75.126.46/html/escapegameTSE/public/codesource',
            'code' => 0
        ]);
        DB::table('riddles')->insert([
            'name' => 'Téléphone',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => 'http://51.75.126.46/html/escapegameTSE/public/telephone',
            'code' => 0
        ]);
        DB::table('riddles')->insert([
            'name' => 'Carré Magique',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => 'http://51.75.126.46/html/escapegameTSE/CarreMagique/',
            'code' => 0
        ]);

        DB::table('riddles')->insert([
            'name' => 'Newsplex',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => null,
            'code' => 0
        ]);
        DB::table('riddles')->insert([
            'name' => 'Les objets de Téo',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => null,
            'code' => 0
        ]);
        DB::table('riddles')->insert([
            'name' => 'Les voyages de Téo',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => null,
            'code' => 0
        ]);
        DB::table('riddles')->insert([
            'name' => 'Téo à l\'étranger',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => null,
            'code' => 0
        ]);
        DB::table('riddles')->insert([
            'name' => 'La tour',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => null,
            'code' => 0
        ]);
        DB::table('riddles')->insert([
            'name' => 'Le mixeur',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => null,
            'code' => 0
        ]);
        DB::table('riddles')->insert([
            'name' => 'L\'arcade',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => null,
            'code' => 0
        ]);
        DB::table('riddles')->insert([
            'name' => 'La fabrique de l\'innovation',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => null,
            'code' => 0
        ]);
        DB::table('riddles')->insert([
            'name' => 'Le mixeur',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => null,
            'code' => 0
        ]);
        DB::table('riddles')->insert([
            'name' => 'La cour des sciences',
            'description' => $faker->sentence(random_int(2, 7)),
            'url' => null,
            'code' => 0
        ]);
    }
}
