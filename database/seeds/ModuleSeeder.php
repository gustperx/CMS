<?php

use Illuminate\Database\Seeder;

use App\Models\Module\Module;

use App\Models\Module\Element;

use App\Models\Module\TypeElement;

use App\Models\Content\SectionModule;

use App\Models\Content\ElementModule;

use Faker\Factory as Faker;

class ModuleSeeder extends Seeder
{
    public function run()
    {

        $this->modules();

        $this->types();

        $this->element();

        $this->sectionModule();

        $this->elementModule();

    }

    public function modules()
    {

    	$data=[

    		['name'=>'Servicios x(3)','view'=>'servicesx3','file_id'=>2]

    	];

    	foreach ($data as $key) {
    		
    		Module::create($key);

    	}

    }

    public function types()
    {

        $data= [

            ['name'=>'Titulo'],

            ['name'=>'Texto'],

            ['name'=>'Icono'],

            ['name'=>'Imagen'],

            ['name'=>'Numero']

        ];

        foreach ($data as $key) 
        {

            TypeElement::create($key);

        }

    }

    public function element()
    {
        $data=[

            ['module_id'=>1,'type_id'=>3],

            ['module_id'=>1,'type_id'=>1],

            ['module_id'=>1,'type_id'=>2],

            ['module_id'=>1,'type_id'=>3],

            ['module_id'=>1,'type_id'=>1],

            ['module_id'=>1,'type_id'=>2],

            ['module_id'=>1,'type_id'=>3],

            ['module_id'=>1,'type_id'=>1],

            ['module_id'=>1,'type_id'=>2],

        ];
        
        foreach ($data as $key)
        {

            Element::create($key);

        }
    }

    public function sectionModule()
    {
        $data=[

            ['section_id'=>1,'module_id'=>1],

            ['section_id'=>2,'module_id'=>1],

        ];

        foreach ($data as $key) {

            SectionModule::create($key);

        }
    }

    public function elementModule()
    {

        $faker= Faker::create();

        $data=[

            ['section_module_id'=>1,'elements_id'=>1,'content'=>'fa fa-user'],

            ['section_module_id'=>1,'elements_id'=>2,'content'=>$faker->realtext(10,2)],

            ['section_module_id'=>1,'elements_id'=>3,'content'=>$faker->realtext(180)],

            ['section_module_id'=>1,'elements_id'=>4,'content'=>'fa fa-users'],

            ['section_module_id'=>1,'elements_id'=>5,'content'=>$faker->realtext(10)],

            ['section_module_id'=>1,'elements_id'=>6,'content'=>$faker->realtext(180)],

            ['section_module_id'=>1,'elements_id'=>7,'content'=>'fa fa-plus'],

            ['section_module_id'=>1,'elements_id'=>8,'content'=>$faker->realtext(13)],

            ['section_module_id'=>1,'elements_id'=>9,'content'=>$faker->realtext(180)],

            ['section_module_id'=>2,'elements_id'=>1,'content'=>'fa fa-user'],

            ['section_module_id'=>2,'elements_id'=>2,'content'=>$faker->realtext(10,2)],

            ['section_module_id'=>2,'elements_id'=>3,'content'=>$faker->realtext(180)],

            ['section_module_id'=>2,'elements_id'=>4,'content'=>'fa fa-users'],

            ['section_module_id'=>2,'elements_id'=>5,'content'=>$faker->realtext(10)],

            ['section_module_id'=>2,'elements_id'=>6,'content'=>$faker->realtext(180)],

            ['section_module_id'=>2,'elements_id'=>7,'content'=>'fa fa-plus'],

            ['section_module_id'=>2,'elements_id'=>8,'content'=>$faker->realtext(13)],

            ['section_module_id'=>2,'elements_id'=>9,'content'=>$faker->realtext(180)],

        ];
        
        foreach ($data as $key)
        {

            ElementModule::create($key);

        }


    }


}
