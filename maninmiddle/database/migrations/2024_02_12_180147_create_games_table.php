<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('field_id')->constrained();
            $table->foreignId('category_id')->constrained();
            $table->dateTime('date_time');
            $table->foreignId('game_type_id')->constrained('game_types');
            // teams
            $table->foreignId('home_team')->constrained('teams');
            $table->foreignId('away_team')->constrained('teams');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
};
