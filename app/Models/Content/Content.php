<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{

	protected $table='contents';

    protected $fillable=['title','slug','content'];
	
	public function sections()
	{

		return $this->hasMany('App\Models\Content\Section');

	}
	
}
