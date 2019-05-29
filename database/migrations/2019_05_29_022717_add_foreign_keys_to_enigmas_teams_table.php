<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEnigmasTeamsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('enigmas_teams', function (Blueprint $table) {
            $table->foreign('enigma_id', 'fk_teams_has_enigmas_enigmas1')->references('id')->on('enigmas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('team_id', 'fk_teams_has_enigmas_teams1')->references('id')->on('teams')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enigmas_teams', function (Blueprint $table) {
            $table->dropForeign('fk_teams_has_enigmas_enigmas1');
            $table->dropForeign('fk_teams_has_enigmas_teams1');
        });
    }

}
