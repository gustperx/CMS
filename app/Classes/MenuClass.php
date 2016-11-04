<?php

namespace App\Classes;

use App\Models\Menu\Menu;


class MenuClass {

    public function get($data = [])
    {

		$menu=Menu::all();

		return $menu;
    }
}
