<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            TeamsTableSeeder::class,
            RiddleSeeder::class,
        ]);
        /*Eloquent::unguard();
        $this->call(UsersTablesSeeder::class);*/

    }
}
