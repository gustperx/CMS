<?php

namespace App\Models\Menu;

use Illuminate\Database\Eloquent\Model;

class MenuAdmin extends Model
{
	protected $table='menus_admins';

    protected $fillable=['menu_id','parent_id','title','description','image','icon','route','order'];
	
    public function subMenu()
    {

    	return $this->hasMany('App\Models\Menu\MenuAdmin','parent_id','id');

    }
}
