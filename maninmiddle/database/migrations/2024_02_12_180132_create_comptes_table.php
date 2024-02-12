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
        Schema::create('compte', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organisation_id')->constrained('organisations');
            $table->string('email')->unique();
            $table->string('mot_de_passe');
            $table->string('nom');
            $table->string('prenom');
            $table->string('telephone');
            $table->string('adresse');
            $table->string('ville');
            $table->string('pays');
            $table->string('code_postal');
            $table->string('photo_profil');
            $table->string('niveau');
            $table->foreignId('type_compte_id')->constrained('type_compte');
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
        Schema::dropIfExists('accounts');
    }
};
