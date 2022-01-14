<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('etat_id')->nullable();
            $table->text('titre');
            $table->text('slug');
            $table->text('image')->nullable();
            $table->text('meta_titre');
            $table->text('meta_description');
            $table->longText('description');
            $table->text('date_publication');
            $table->date('date_publication_order');
            $table->longText('contenu');
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
        Schema::dropIfExists('articles');
    }
}
