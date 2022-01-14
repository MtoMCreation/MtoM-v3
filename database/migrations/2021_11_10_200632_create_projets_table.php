<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('etat_id');
            $table->text('client');
            $table->text('date_publication');
            $table->date('date_publication_order');
            $table->text('lien_site');
            $table->text('logo');
            $table->text('slug');
            $table->text('meta_titre');
            $table->text('meta_description');
            $table->text('image');
            $table->longText('demande');
            $table->longText('reponse');
            $table->text('image_reponse')->nullable();
            $table->timestamps();
        });

        // Ajout colonne "description_prestation" sur une autre migration
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projets');
    }
}
