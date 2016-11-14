<?php

namespace App\Models\Config;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
	protected $table='configs';

   	protected $fillable=['admin_title','site_title','logo_id','home_id'];
	
	public function logo()
	{
    	return $this->hasOne('App\Models\File\File','id','logo_id');
	}
	public function home()
	{
		return $this->hasOne('App\Models\Content\Content','id','home_id');
	}	

}
