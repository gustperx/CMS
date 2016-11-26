<?php

namespace App\Classes;

use App\Models\Menu\MenuAdmin;

class Menuclass {

	private $menu;

	function __construct()
	{
		$this->menu = new MenuAdmin();
	}

    public function get($data = [])

    {
    	
		$menu = $this->menu->where('parent_id',0)->get();

		return $menu;
 
    }
}