<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('categoris',function (Blueprint $kolom){
            $kolom->increments('id');
            $kolom->string('Kategori');
        });

      Schema::create('topics', function (Blueprint $table){
          $table->increments('id');
          $table->integer('author_id')->unsigned()->default(0);
          $table->foreign('author_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
          $table->unsignedInteger('category_id')->nullable();
          $table->string('judul'); //untuk meta description, idk
          $table->text('description'); //post
          $table->string('slug')->default('topic');
          $table->string('images')->default('img.jpg');
          $table->boolean('active')->default(1);
          $table->timestamps();
      });

        Schema::table('topics',function (Blueprint $kolom){
            $kolom->foreign('category_id')->references('id')->on('categoris')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('topics');
    }
}
