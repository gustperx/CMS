<?php

namespace App\Models\Menu;

use Illuminate\Database\Eloquent\Model;

class MenuLvl1 extends Model
{
	protected $table='menus_lvl1';

    protected $fillable = ['menu_id','title','description','image','icon','route','order'];
    
    public function menulvl2()
    {
        return $this->hasMany('App\Models\Menu\MenuLvl2');
    }
	
	
}
