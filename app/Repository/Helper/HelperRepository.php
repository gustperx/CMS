<?php
namespace App\Repository\Helper;

use App\Repository\BaseRepository;

use App\Models\Config\City;


class HelperRepository extends BaseRepository
{
	private $city;


	function __construct()
	{
        parent::__construct();

		$this->city= new City();

	}

	public function getCity($id)
	{

		$cities=$this->city->where('state_id', $id)->get();

		foreach ($cities as $data) {

			echo '<option id="'.$data->id.'" >'.$data->city.'</option>';

		}
		
		
	}

        
}