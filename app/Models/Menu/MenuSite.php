<?php

namespace App\Models\Menu;

use Illuminate\Database\Eloquent\Model;

class MenuSite extends Model
{
	protected $table='site_menus';

    protected $fillable=['title','icon','parent_id'];

    public function subMenu()
    {

    	return $this->hasMany('App\Models\Menu\MenuSite','parent_id','id');

    }

    public function content()
    {

    	return $this->hasOne('App\Models\Content\Content','id','content_id');

    }

    

}
