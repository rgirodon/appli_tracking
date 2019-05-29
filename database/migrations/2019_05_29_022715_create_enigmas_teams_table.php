<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnigmasTeamsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enigmas_teams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('team_id')->unsigned()->index('fk_teams_has_enigmas_teams1_idx');
            $table->integer('enigma_id')->unsigned()->index('fk_teams_has_enigmas_enigmas1_idx');
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('enigmas_teams');
    }

}
