<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Entreprise extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprise', function (Blueprint $table) {
            //Un nom (obligatoire, unique)
            //Une rue (obligatoire)
            //Un code postal (obligatoire, chaine de taille 5)
            //Une ville (obligatoire)
            //Numéro de téléphone (Si rempli, au format téléphone portable français et unique)
            //Email (obligatoire, unique et au format email ex: a@a.a)
            $table->increments('id');
            $table->string('nom')->unique()->nullable(false);
            $table->string('rue')->nullable(false);;
            $table->unsignedMediumInteger('code_postal')->nullable(false);
            $table->string('ville')->nullable(false);
            $table->unsignedBigInteger('numero_telephone')->unique();
            $table->string('email')->unique()->nullable(false);
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('entreprise', function (Blueprint $table){});
    }
}
