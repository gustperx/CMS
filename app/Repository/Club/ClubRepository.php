<?php 
namespace App\Repository\Club;

use App\Repository\BaseRepository;

use App\Models\Club\Club;

use App\Models\Config\State;

use App\Models\Config\City;

use App\Models\User\User;

use App\Models\User\Profile;

class ClubRepository extends BaseRepository
{
	private $club;

	private $state;

	private $city;

	private $user;

	private $profile;

	function __construct()
	{
		parent:: __construct();

		$this->club= new Club();

		$this->state = new State();

		$this->city = new City();

		$this->user = new User();

		$this->profile = new Profile();
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
		$profileData = $this->profile->create([

			'name'		=> $data['name'],

			'lastname'	=> $data['lastname']

		]);

		$userData = $this->user->create([

			'password'		=> bcrypt('123456'),

			'email'			=> $data['email'],

			'profile_id'	=> $profileData->id,

			'role_id'		=> 4

		]);
		
		$cluData = $this->club->create([

			'name'		=>$data['club_name'],

			'user_id'	=>$userData->id,

			'state_id'	=>$data['state_id'],

			'city_id'	=>$data['city_id'],

			'logo'		=>'logo-pastor',

			'about'		=> $data['about'],

			'members'	=> $data['members']

		]);

		return $cluData;
	}

	public function deleteClub($id)
	{
		return $this->club->destroy($id);
	}



}