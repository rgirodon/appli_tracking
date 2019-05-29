<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRoomsTeamsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rooms_teams', function (Blueprint $table) {
            $table->foreign('team_id', 'fk_teams_has_rooms_teams1')->references('id')->on('teams')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('room_id', 'fk_teams_has_rooms_rooms1')->references('id')->on('rooms')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rooms_teams', function (Blueprint $table) {
            $table->dropForeign('fk_teams_has_rooms_teams1');
            $table->dropForeign('fk_teams_has_rooms_rooms1');
        });
    }

}
