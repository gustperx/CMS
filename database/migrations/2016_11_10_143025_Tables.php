<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

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

        Schema::create('files', function (Blueprint $table) {
            
            $table->increments('id');

            $table->string('file', 200);

            $table->string('title', 100);

            $table->string('alt', 100);

            $table->string('description', 250);

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

        Schema::create('contents', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');            

            $table->string('title', 50);

            $table->string('subtitle', 50);

            $table->string('slug', 50)->unique();

            $table->string('content', 50);

            $table->timestamps();

        });

        Schema::create('configs', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('logo_id')->unsigned();

            $table->foreign('logo_id')->references('id')->on('files')
                ->onUpdate('cascade')->onDelete('cascade');            

            $table->integer('home_id')->unsigned();

            $table->foreign('home_id')->references('id')->on('contents')
                ->onUpdate('cascade')->onDelete('cascade');            

            $table->string('admin_title', 100);

            $table->string('site_title', 100);

            $table->string('title', 100);

            $table->timestamps();
        });        



        Schema::create('animations', function (Blueprint $table) {

            $table->increments('id');

            $table->string('name', 50);

            $table->timestamps();


        });
        
        Schema::create('sections', function (Blueprint $table) {

            $table->increments('id');

            $table->string('title', 50);

            $table->string('subtitle', 50);

            $table->string('color', 7);

            $table->integer('animation_delay')->unsigned();

            $table->enum('text_align', ['Izquierdo', 'Centro', 'Derecho'])->default('Izquierdo');

            $table->integer('content_id')->unsigned();

            $table->foreign('content_id')->references('id')->on('contents')
                ->onUpdate('cascade')->onDelete('cascade');            

            $table->integer('animation_id')->unsigned();

            $table->foreign('animation_id')->references('id')->on('animations')
                ->onUpdate('cascade')->onDelete('cascade');            


            $table->timestamps();


        });

        Schema::create('site_menus', function (Blueprint $table) {

            $table->increments('id');

            $table->string('title', 50);
            
            $table->string('icon', 50);
            
            $table->string('url', 150);

            $table->integer('content_id')->unsigned();

            $table->integer('parent_id')->unsigned();

            $table->timestamps();

        });

        Schema::create('modules', function (Blueprint $table) {

            $table->increments('id');
            
            $table->string('name', 50);

            $table->string('view', 50);

            $table->enum('type', ['Estático', 'Dinámico'])->default('Estático');

            $table->integer('file_id')->unsigned();

            $table->foreign('file_id')->references('id')->on('files');
            
            $table->timestamps();

        });

        Schema::create('types_elements', function (Blueprint $table) {

            $table->increments('id');
            
            $table->string('name', 20);

            $table->timestamps();

        });

        Schema::create('elements', function (Blueprint $table) {

            $table->increments('id');
            
            $table->integer('module_id')->unsigned();

            $table->foreign('module_id')->references('id')->on('modules');

            $table->integer('type_id')->unsigned();

            $table->foreign('type_id')->references('id')->on('types_elements');
            
            $table->timestamps();

        });

        Schema::create('sections_modules', function (Blueprint $table) {

            $table->increments('id');
                        
            $table->integer('section_id')->unsigned();

            $table->foreign('section_id')->references('id')->on('sections');

            $table->integer('module_id')->unsigned();

            $table->foreign('module_id')->references('id')->on('modules');

            $table->timestamps();

        });


        Schema::create('elements_modules', function (Blueprint $table) {

            $table->increments('id');
                        
            $table->integer('elements_id')->unsigned();

            $table->foreign('elements_id')->references('id')->on('elements');

            $table->integer('section_module_id')->unsigned();

            $table->foreign('section_module_id')->references('id')->on('sections_modules');

            $table->timestamps();

        });


    }

    public function down()
    {

        Schema::dropIfExists('social_links');      

        Schema::dropIfExists('socials');        

        Schema::dropIfExists('menus_lvl3');

        Schema::dropIfExists('menus_lvl2');

        Schema::dropIfExists('menus_lvl1');

        Schema::dropIfExists('menus');

        Schema::dropIfExists('clubs_teams');  

        Schema::dropIfExists('clubs');  

        Schema::dropIfExists('cities');  

        Schema::dropIfExists('states');  

        Schema::dropIfExists('positions');  

        Schema::dropIfExists('configs');

        Schema::dropIfExists('sections_modules');  

        Schema::dropIfExists('sections');  

        Schema::dropIfExists('contents');  
        
        Schema::dropIfExists('elements');  

        Schema::dropIfExists('types_elements');  

        Schema::dropIfExists('modules');  

        Schema::dropIfExists('files');        

        Schema::dropIfExists('animations');          

        Schema::dropIfExists('site_menus');          

    }
}
