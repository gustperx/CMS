<?php

namespace App\Models\Module;

use Illuminate\Database\Eloquent\Model;


class Element extends Model
{

	protected $table='elements';

    protected $fillable=['module_id','type_id'];

    public function type()
    {

    	return $this->hasOne('App\Models\Module\TypeElement','id','type_id');

    }
	
}
