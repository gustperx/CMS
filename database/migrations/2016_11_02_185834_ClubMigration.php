<?php

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;

class ClubMigration extends Migration
{
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            
            $table->increments('id');

            $table->string('file', 200);

            $table->string('thumb', 200);

            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')

                ->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });

        Schema::create('states', function (Blueprint $table) {

            $table->increments('id');

            $table->string('state', 50);

            $table->timestamps();

        });

        Schema::create('cities', function (Blueprint $table) {

            $table->increments('id');

            $table->string('city', 50);

            $table->integer('state_id')->unsigned();

            $table->foreign('state_id')->references('id')->on('states')
                ->onUpdate('cascade')->onDelete('cascade');            

            $table->timestamps();

        });


        Schema::create('clubs', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('file_id')->unsigned();
            
            $table->foreign('file_id')->references('id')->on('files')
                ->onUpdate('cascade')->onDelete('cascade');     

            $table->string('name', 50);

            $table->longText('about');

            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('state_id')->unsigned();

            $table->foreign('state_id')->references('id')->on('states')
                ->onUpdate('cascade')->onDelete('cascade');     

            $table->integer('city_id')->unsigned();

            $table->foreign('city_id')->references('id')->on('cities')
                ->onUpdate('cascade')->onDelete('cascade');     

            $table->integer('members')->unsigned();
            
            $table->enum('status', ['Activo', 'En Espera', 'Bloqueado'])->default('En Espera');

            $table->timestamps();

        });

        Schema::create('positions', function (Blueprint $table) {

            $table->increments('id');

            $table->string('name', 50);

            $table->timestamps();

        });

        Schema::create('clubs_teams', function (Blueprint $table) {

            $table->increments('id');

            $table->string('name', 50);

            $table->string('lastname', 50);
            
            $table->integer('club_id')->unsigned();

            $table->foreign('club_id')->references('id')->on('clubs')
                ->onUpdate('cascade')->onDelete('cascade');            

            $table->integer('position_id')->unsigned();

            $table->foreign('position_id')->references('id')->on('positions')
                ->onUpdate('cascade')->onDelete('cascade');            

            $table->timestamps();

        });

    }

    public function down()
    {
        Schema::drop('clubs_teams');  

        Schema::drop('clubs');  

        Schema::drop('files');  
        
        Schema::drop('cities');  

        Schema::drop('states');  

        Schema::drop('positions');  

    }
}
