<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Collaborateur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaborateur', function (Blueprint $table) {
            //Une civilité (Homme/Femme/Non-binaire)
            //Un nom (obligatoire)
            //Un prénom (obligatoire)
            //Une rue (obligatoire)
            //Un code postal (obligatoire, chaine de taille 5)
            //Une ville (obligatoire)
            //Numéro de téléphone (Si rempli, unique et au format téléphone portable français)
            //Email (obligatoire, unique et au format email ex: a@a.a)
            //Une entreprise (Relation entre l’entité Entreprise et l’entité Collaborateur) (obligatoire)
            $table->increments('id');
            $table->enum('civilite',['Homme','Femme','Non-binaire']);
            $table->string('nom')->nullable(false);
            $table->string('prenom')->nullable(false);
            $table->string('rue')->nullable(false);
            $table->unsignedMediumInteger('code_postal')->nullable(false);
            $table->string('ville')->nullable(false);
            $table->unsignedBigInteger('numero_telephone')->unique();
            $table->string('email')->unique()->nullable(false);
            $table->string('entreprise')->nullable(false);
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('collaborateur', function (Blueprint $table){});
    }
}
