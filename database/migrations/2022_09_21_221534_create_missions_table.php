<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missions', function (Blueprint $table) {
            $table->id();
            $table->string('titre_mission')->nullable(); 
            $table->string('nombre_candidats')->nullable();
            $table->date('date_debut')->nullable();
            $table->date('date_fin')->nullable();
            $table->string('type_contrat')->nullable();
            $table->text('services_sollicites')->nullable(); // domaine d'expertise sollicite pour l'entrepreneur
            $table->text('description_projet')->nullable(); 
            $table->string('cout_projet')->nullable();
            $table->text('objectif_projet')->nullable();
            $table->string('expertise_sollicite')->nullable();
            $table->string('id_auth');
            $table->string('role')->nullable();
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
        Schema::dropIfExists('missions');
    }
}
