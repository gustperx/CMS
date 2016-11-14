<?php

namespace App\Models\Club;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{

	protected $table='clubs';

    protected $fillable=['file_id','name','user_id','about','members','state_id','city_id'];

    public function clubTeam()
    {

    	return $this->hasMany('App\Models\Club\ClubTeam');

    }

    public function state()
    {

    	return $this->hasOne('App\Models\Config\State','id','state_id');

    }

    public function city()
    {

        return $this->hasOne('App\Models\Config\City','id','city_id');

    }
    
    public function logo()
    {

        return $this->hasOne('App\Models\File\File','id','file_id');

    }

	
}
