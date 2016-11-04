<?php

namespace App\Models\Menu;

use Illuminate\Database\Eloquent\Model;

class MenuLvl3 extends Model
{
	protected $table='menus_lvl3';

    protected $fillable = ['title','description','image','icon','route','order','menu_lvl1_id'];

    public function menulvl3()
    {

        return $this->hasMany('App\Models\Menu\MenuLvl3');
        
    }

}
