<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMessagesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->foreign('team_id', 'fk_messages_teams1')->references('id')->on('teams')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('room_id', 'fk_messages_rooms1')->references('id')->on('rooms')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->dropForeign('fk_messages_teams1');
            $table->dropForeign('fk_messages_rooms1');
        });
    }

}
