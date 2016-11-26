<?php

namespace App\Models\Module;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
	protected $table='modules';

    protected $fillable=['name','view','file_id'];
	
	public function elements()
	{

		return $this->hasMany('App\Models\Module\Module','id','module_id');

	}
	
	public function image()
	{

		return $this->hasOne('App\Models\File\File','id','file_id');

	}
}
