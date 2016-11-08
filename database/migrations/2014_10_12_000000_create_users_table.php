<?php

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

        Schema::create('profiles', function (Blueprint $table) {

            $table->increments('id');

            $table->string('name', 60);

            $table->string('avatar',120);

            $table->string('lastname', 60);

            $table->string('dni', 15);

            $table->longText('address');            

            $table->string('phone_1', 15);

            $table->string('phone_2', 15);

            $table->timestamps();

        });

        Schema::create('roles', function (Blueprint $table) {
            
            $table->increments('id');   
            
            $table->string('role');

            $table->timestamps();            

        });        

        Schema::create('users', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('profile_id')->unsigned();

            $table->integer('role_id')->unsigned();

            $table->string('email')->unique();

            $table->string('password', 60);

            $table->rememberToken();

            $table->timestamps();

            $table->foreign('profile_id')->references('id')->on('profiles')
                ->onUpdate('cascade')->onDelete('cascade');            

            $table->foreign('role_id')->references('id')->on('roles')
                ->onUpdate('cascade')->onDelete('cascade');            

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
        
        Schema::drop('profiles');

        Schema::drop('roles');



    }
}
