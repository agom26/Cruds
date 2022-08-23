<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("title",255); 
            $table->string("slug",255);
            $table->text("description",255);
            $table->text("content");
            $table->string("image");  /* Por le momento la imagen es tipo string */
            $table->enum("posted",['yes','not']);  /* Que sea opcion para saber si si fue posteado o no */
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
        Schema::dropIfExists('posts');
    }
}
