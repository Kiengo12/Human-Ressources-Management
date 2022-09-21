<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable(); // nom personne legale prestataire
            $table->string('prenom')->nullable(); // nom personne representant juridique prestataire | denomination du projet "entrepreneur"
            $table->string('nom_entreprise')->nullable();
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('sexe')->nullable();
            $table->string('annee_experience')->nullable();
            $table->date('date_naissance')->nullable();
            $table->string('domaine_expertise')->nullale(); //domaine de formation postulant | Domaine d'intervention prestataire
            $table->string('effectif_equipe')->nullable();
            $table->string('references')->nullable();
            $table->string('type_entreprise')->nullable(); // forme juridique de l'entreprise
            $table->string('niveau_formation')->nullable();
            $table->string('pays')->nullable();
            $table->string('ville');
            $table->string('quartier')->nullable();
            $table->string('cv')->nullable();
            $table->string('photo_profile')->default("../images/profil.PNG");
            $table->string('resume')->nullale();
            $table->string('activite_principale')->nullale();
            $table->string('role')->nullable();
            $table->string('description_entreprise')->nullale();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
