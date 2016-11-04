<?php
namespace App\Repository\Config;

use App\Repository\BaseRepository;

use App\Models\Config\Config;


class ConfigRepository extends BaseRepository
{
	private $config;

	function __construct()
	{

        parent::__construct();

		$this->config= new Config();

	}

	public function getConfig()
	{
		return $this->config->findOrFail(1);
	}

	public function getBreadcrumbIndex(){
        $array=[

            [   
                'name'=>'Configuraciones de la pagina',

                'url'=>null,

                'class'=>'crumb-link'

            ]

        ];

        return $this->GetCollection($array);

	}
	public function updateConfig($id,$data)
	{
		return $this->config->findOrFail($id)->update($data);
	}


        
}