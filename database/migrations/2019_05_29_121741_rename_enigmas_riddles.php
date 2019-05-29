<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class RenameEnigmasRiddles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('enigmas', 'riddles');
        Schema::rename('enigmas_enigmas', 'riddles_riddles');
        Schema::rename('enigmas_teams', 'riddles_team');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('riddles', 'enigmas');
        Schema::rename('riddles_riddles', 'enigmas_enigmas');
        Schema::rename('riddles_team', 'enigmas_teams');
    }
}
