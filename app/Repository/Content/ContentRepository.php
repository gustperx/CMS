<?php 
namespace App\Repository\Content;

use App\Repository\BaseRepository;

use App\Models\Content\Content;

class ContentRepository extends BaseRepository
{
	private $content;
	
	function __construct()
	{
        parent::__construct();
		
		$this->content = new Content();
	}

	public function getContents($id)
	{
		switch ($id) {

			case 0:

				return $this->content->orderBy('title', 'asc')->paginate(10);

				break;

			default:

				return $this->content->findOrFail($id);

				break;

		}

	}

	public function getContentsList()
	{

		return $this->content->lists('title','id');
	}

	public function getBreadcrumbIndex(){

        $array=[

            [   
                'name'=>'Lista de Contenidos',

                'url'=>null,

                'class'=>'crumb-tail'

            ]

        ];

        return $this->GetCollection($array);

    }        

	public function getBreadcrumbCreate(){
		
        $array=[

            [   
                'name'=>'Ver Contenidos',

                'url'=>route('index_content'),

            ],
            [

                'name'=>'Agregar Contenido',

                'url'=>null,


            ]

        ];

        return $this->GetCollection($array);

	}

}