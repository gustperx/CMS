<?php

use Illuminate\Database\Seeder;

use App\Models\Module\Module;

use App\Models\Module\Element;

use App\Models\Module\TypeElement;

use App\Models\Content\SectionModule;

class ModuleSeeder extends Seeder
{
    public function run()
    {

        $this->modules();

        $this->types();

        $this->element();

        $this->sectionModule();

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

        ];

        foreach ($data as $key) {

            SectionModule::create($key);

        }
    }


}
