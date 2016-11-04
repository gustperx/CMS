<?php
namespace App\Repository\Social;

use App\Repository\BaseRepository;

use App\Models\Config\SocialLinks;

use App\Models\Config\Social;


class SocialRepository extends BaseRepository
{
	private $socialLinks;

	private $social;

	function __construct()
	{
        parent::__construct();

		$this->socialLinks= new SocialLinks();

		$this->social= new Social();
	}

	public function getSocialLinks($id)
	{
		switch ($id) {
			case 0:
				return $this->socialLinks->orderBy('id', 'desc')->paginate(10);
				break;
			default:
				return $this->socialLinks->findOrFail($id);
				break;
		}
	}

	public function getCollections($array)
	{
		return $this->data_object($array);
	}

	public function createSocialLinks($data)
	{
		return $this->socialLinks->create($data);
	}

	public function deleteSocialLinks($id)
	{
		return $this->socialLinks->destroy($id);
	}

	public function updateSocialLinks($id,$data)
	{
		return $this->socialLinks->findOrFail($id)->update($data);
	}

	public function getSocial()
	{
		return $this->social->lists('name','id');
	}

	public function getBreadcrumbCreate(){
        $array=[

            [   
                'name'=>'Lista de Redes Sociales',

                'url'=>route('index_social'),

                'class'=>'crumb-link'

            ],
            [

                'name'=>'Agregar Red Social',

                'url'=>null,

                'class'=>'crumb-tail'

            ]

        ];

        return $this->GetCollection($array);

	}

	public function getBreadcrumbEdit(){

        $array=[

            [   
                'name'=>'Lista de Redes Sociales',

                'url'=>route('index_social'),

                'class'=>'crumb-link'

            ],
            [

                'name'=>'Editar Red Social',

                'url'=>null,

                'class'=>'crumb-tail'

            ]

        ];

        return $this->GetCollection($array);

    }

	public function getBreadcrumbIndex(){

        $array=[

            [   
                'name'=>'Lista de Redes Sociales',

                'url'=>null,

                'class'=>'crumb-tail'

            ]

        ];

        return $this->GetCollection($array);

    }        
        
}