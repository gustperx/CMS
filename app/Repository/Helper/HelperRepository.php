<?php
namespace App\Repository\Helper;

use App\Repository\BaseRepository;

use App\Models\Config\City;

use App\Models\User\User;

class HelperRepository extends BaseRepository
{
	private $city;

	private $user;

	function __construct()
	{
        parent::__construct();

		$this->city = new City();

		$this->user = new User;

	}

	public function getCity($id)
	{

		$cities=$this->city->where('state_id', $id)->get();

		foreach ($cities as $data) {

			echo '<option value="'.$data->id.'" >'.$data->city.'</option>';

		}
		
	}

	public function getEmail($email)
	{

		return $this->user->where('email','=',$email)->get();

	}

        
}