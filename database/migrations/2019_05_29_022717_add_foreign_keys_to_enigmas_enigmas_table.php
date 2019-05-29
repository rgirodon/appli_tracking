<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEnigmasEnigmasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('enigmas_enigmas', function (Blueprint $table) {
            $table->foreign('parent_id', 'fk_enigmas_has_enigmas_enigmas')->references('id')->on('enigmas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('child_id', 'fk_enigmas_has_enigmas_enigmas1')->references('id')->on('enigmas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enigmas_enigmas', function (Blueprint $table) {
            $table->dropForeign('fk_enigmas_has_enigmas_enigmas');
            $table->dropForeign('fk_enigmas_has_enigmas_enigmas1');
        });
    }

}
