<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscription', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("prenom");
            $table->string("code_massar");
            $table->string("cin");
            $table->date("dateNaissance");
            $table->string("university");
            $table->string("diplome");
            $table->integer("noteGeneral");
            $table->boolean("status");
            $table->unsignedBigInteger('idFiliere');
            $table->foreign('idFiliere')->references('id')->on('filiere');
            
    
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
        Schema::dropIfExists('inscription');
    }
}
