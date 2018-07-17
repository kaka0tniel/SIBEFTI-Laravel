<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

              Schema::create('roles',function (Blueprint $kolom){
                  $kolom->increments('id');
                  $kolom->string('RuleName');
              });

              Schema::create('angkatan',function(Blueprint $table)
              {
              $table->increments('id');
              $table->string('angkatan');
              });

              Schema::create('prodi',function(Blueprint $table)
              {
              $table->increments('id');
              $table->string('prodi');
              });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('roles_id')->nullable();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('users',function (Blueprint $kolom){
            $kolom->foreign('roles_id')->references('id')->on('roles')->onDelete('cascade')->onUpdate('cascade');

        });

        Schema::create('mahasiswa',function(Blueprint $table)
        {
          $table->increments('id');
          $table->unsignedInteger('user_id')->nullable();
          $table->string('Name');
          $table->string('tanggalLahir');
          $table->string('tempat lahir');
          $table->string('alamat');
          $table->unsignedInteger('angkatan_id')->nullable();
          $table->unsignedInteger('prodi_id')->nullable();
          $table->string('avatar')->default('default.jpg');

        });

        Schema::table('mahasiswa',function (Blueprint $kolom){
            $kolom->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });

        Schema::table('mahasiswa',function (Blueprint $kolom){
            $kolom->foreign('angkatan_id')->references('id')->on('angkatan')->onDelete('cascade')->onUpdate('cascade');

        });

        Schema::table('mahasiswa',function (Blueprint $kolom){
            $kolom->foreign('prodi_id')->references('id')->on('prodi')->onDelete('cascade')->onUpdate('cascade');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('users');
      Schema::drop('roles');

    }
}
