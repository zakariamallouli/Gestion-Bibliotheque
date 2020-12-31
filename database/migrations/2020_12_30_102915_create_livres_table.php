<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livres', function (Blueprint $table) {
            $table->id();
            $table->String('titre');
            $table->String('image');
            $table->String('langue');
            $table->integer('qte');
            $table->double('prix');
            $table->String('resume');
            // foreign genre
            $table->integer('genre_id')->unsigned();
            $table->foreign('genre_id')->references('id')->on('genres');
            // foreign Tag
            $table->integer('tags_id')->unsigned();
            $table->foreign('tags_id')->references('id')->on('tags');
            // foreign Auteur
            $table->integer('auteur_id')->unsigned();
            $table->foreign('auteur_id')->references('id')->on('auteurs');
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
        Schema::dropIfExists('livres');
    }
}
