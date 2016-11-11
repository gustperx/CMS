<?php

namespace App\Models\Config;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
	protected $table='configs';

   	protected $fillable=['title','logo_id'];
	
	public function logo()
	{
    	return $this->hasOne('App\Models\File\File','id','logo_id');
	}	

}
