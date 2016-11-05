<?php 
namespace App\Repository\Club;

use App\Repository\BaseRepository;

use App\Models\Club\Club;

use App\Models\Config\State;

use App\Models\Config\City;


class ClubRepository extends BaseRepository
{
	private $club;

	private $state;

	private $city;

	function __construct()
	{
		parent:: __construct();

		$this->club= new Club();

		$this->state = new State();

		$this->city = new City();

	}

	public function getClub($id)
	{
		switch ($id) {

			case 0:

				return $this->club->orderBy('name', 'asc')->paginate(10);

				break;

			default:

				return $this->club->findOrFail($id);

				break;

		}

	}
    public function getUserSelect($role)
    {
       return $this->getUsers($role);
    }

	public function getState()
	{
		return $this->state->lists('state', 'id');

	}

	public function getCity($id)
	{
		return $this->city->where('state_id',$id)->lists('city', 'id');


	}

	public function getBreadcrumbIndex(){
		
        $array=[

            [   
                'name'=>'Lista de Clubes',

                'url'=>null,

                'class'=>'crumb-link'

            ]

        ];

        return $this->GetCollection($array);

	}
	public function getBreadcrumbCreate(){
		
        $array=[

            [   
                'name'=>'Lista de Clubes Afiliados',

                'url'=>route('index_club'),

            ],
            [

                'name'=>'Agregar Club',

                'url'=>null,


            ]

        ];

        return $this->GetCollection($array);

	}

	public function createClub($data)
	{
		return $this->club->create($data);
	}

	public function deleteClub($id)
	{
		return $this->club->destroy($id);
	}



}