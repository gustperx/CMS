<?php

namespace App\Models\Menu;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
	protected $table='menus';

    public function role()
    {
        return $this->hasOne('App\Models\User\Role', 'id', 'role_id');
    }
    public function menulvl1()
    {
        return $this->hasMany('App\Models\Menu\MenuLvl1');
    }
	
	
}
