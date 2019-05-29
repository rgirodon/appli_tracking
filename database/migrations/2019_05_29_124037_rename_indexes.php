<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameIndexes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('riddles_riddles', function (Blueprint $table) {
            $table->renameIndex('fk_enigmas_has_enigmas_enigmas_idx', 'fk_riddles_has_riddles_riddles_idx');
            $table->renameIndex('fk_enigmas_has_enigmas_enigmas1_idx', 'fk_riddles_has_riddles_riddles1_idx');
        });

        Schema::table('riddles_team', function (Blueprint $table) {
            $table->renameIndex('fk_teams_has_enigmas_teams1_idx', 'fk_teams_has_riddles_teams1_idx');
            $table->renameIndex('fk_teams_has_enigmas_enigmas1_idx', 'fk_teams_has_riddles_riddles1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('riddles_riddles', function (Blueprint $table) {
            $table->renameIndex('fk_riddles_has_riddles_riddles_idx', 'fk_enigmas_has_enigmas_enigmas_idx');
            $table->renameIndex('fk_riddles_has_riddles_riddles1_idx', 'fk_enigmas_has_enigmas_enigmas1_idx');
        });

        Schema::table('riddles_team', function (Blueprint $table) {
            $table->renameIndex('fk_teams_has_riddles_teams1_idx', 'fk_teams_has_enigmas_teams1_idx');
            $table->renameIndex('fk_teams_has_riddles_riddles1_idx', 'fk_teams_has_enigmas_enigmas1_idx');
        });
    }
}
