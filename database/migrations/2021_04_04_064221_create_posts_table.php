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
            $table->integer('categoryId');
            $table->integer('userId')->nullable();
            $table->string('status','20');
            $table->text('description');
            $table->string('title');
            $table->double('price','12','2');
            $table->string('region');
            $table->integer('sector')->nullable();
            $table->integer('road');
            $table->integer('plot');
            $table->text('image');
            $table->text('video')->nullable();
            $table->double('longitude','7','7')->nullable();
            $table->double('latitude','7','7')->nullable();


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
