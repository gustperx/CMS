<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConfigTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            
            $table->increments('id');

            $table->string('logo', 200);

            $table->string('title', 100);

            $table->string('favicon',200);

            $table->timestamps();
        });

        Schema::create('socials', function (Blueprint $table) {
            
            $table->increments('id');
            
            $table->string('name',20);

            $table->string('icon',15);

            $table->string('color',8);
            
            $table->timestamps();                        

        });

        Schema::create('social_links', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('social_id')->unsigned();

            $table->string('url',200);

            $table->timestamps();  

            $table->foreign('social_id')->references('id')->on('socials')
                ->onUpdate('cascade')->onDelete('cascade');

        });

        Schema::create('menus', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('role_id')->unsigned();            

            $table->string('title', 60);

            $table->string('description', 120)->nullable();

            $table->foreign('role_id')->references('id')->on('roles')
                ->onUpdate('cascade')->onDelete('cascade');            

            $table->timestamps();

        });

        Schema::create('menus_lvl1', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('menu_id')->unsigned();

            $table->string('title', 60);

            $table->string('description', 120)->nullable();

            $table->string('route', 100)->nullable();

            $table->string('image', 100)->nullable();

            $table->string('icon', 30)->nullable();

            $table->integer('order')->unsigned();

            $table->foreign('menu_id')->references('id')->on('menus')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });

        Schema::create('menus_lvl2', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('menu_lvl1_id')->unsigned();

            $table->string('title', 60);

            $table->string('description', 120)->nullable();

            $table->string('route', 100)->nullable();

            $table->string('image', 100)->nullable();            

            $table->string('icon', 30)->nullable();

            $table->integer('order')->unsigned();

            $table->foreign('menu_lvl1_id')->references('id')->on('menus_lvl1')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();

        });

        Schema::create('menus_lvl3', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('menu_lvl2_id')->unsigned();

            $table->string('title', 60);

            $table->string('description', 120)->nullable();

            $table->string('route', 100)->nullable();

            $table->string('image', 100)->nullable();            

            $table->string('icon', 30)->nullable();

            $table->integer('order')->unsigned();

            $table->foreign('menu_lvl2_id')->references('id')->on('menus_lvl2')
                ->onUpdate('cascade')->onDelete('cascade');

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
        Schema::drop('social_links');      

        Schema::drop('socials');        

        Schema::drop('configs');

        Schema::drop('menus_lvl3');

        Schema::drop('menus_lvl2');

        Schema::drop('menus_lvl1');

        Schema::drop('menus');
    }
}
