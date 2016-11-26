<?php
namespace App\Repository\Module;

use App\Repository\BaseRepository;

use App\Models\Module\Module;

class ModuleRepository extends BaseRepository
{
	private $module;

	function __construct()
	{
        parent::__construct();

		$this->module= new Module();

	}

	public function getModules($id)
	{
		switch ($id) {

			case 0:

				return $this->module->orderBy('id', 'desc')->paginate(10);

				break;

			default:

				return $this->module->findOrFail($id);
				
				break;
		}
	}

	public function createModule($data)
	{
		return $this->module->create($data);
	}

	public function deleteModule($id)
	{
		return $this->module->destroy($id);
	}

	public function updateSocialLinks($id,$data)
	{
		return $this->module->findOrFail($id)->update($data);
	}

	public function getSocial()
	{
		return $this->social->lists('name','id');
	}

	public function getBreadcrumbCreate(){
        $array=[

            [   
                'name'=>'Lista de Modulos',

                'url'=>route('index_module'),

                'class'=>'crumb-link'

            ],
            [

                'name'=>'Agregar Modulo',

                'url'=>null,

                'class'=>'crumb-tail'

            ]

        ];

        return $this->GetCollection($array);

	}

	public function getBreadcrumbEdit(){

        $array=[

            [   
                'name'=>'Lista Modulos',

                'url'=>route('index_module'),

                'class'=>'crumb-link'

            ],
            [

                'name'=>'Editar Modulo',

                'url'=>null,

                'class'=>'crumb-tail'

            ]

        ];

        return $this->GetCollection($array);

    }

	public function getBreadcrumbIndex(){

        $array=[

            [   
                'name'=>'Lista de Modulos',

                'url'=>null,

                'class'=>'crumb-tail'

            ]

        ];

        return $this->GetCollection($array);

    }        
        
}