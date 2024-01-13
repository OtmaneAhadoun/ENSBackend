<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cours', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idModule');
            $table->unsignedBigInteger('idProfesseur');
            $table->unsignedBigInteger('idFiliere');
            $table->unsignedBigInteger('idJour');
            $table->time('Heure_debut');
            $table->time('Heure_fin');
            $table->string('semestre');
            $table->foreign('idModule')->references('id')->on('module');
            $table->foreign('idProfesseur')->references('id')->on('professeur');
            $table->foreign('idFiliere')->references('id')->on('filiere');
            $table->foreign('idJour')->references('id')->on('jour');
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
        Schema::dropIfExists('cours');
    }
}
