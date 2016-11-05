<?php

namespace App\Models\Club;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{

	protected $table='clubs';

    protected $fillable=['logo','name','user_id','about','members','state_id','city_id'];

    public function clubTeam()
    {

    	return $this->hasMany('App\Models\Club\ClubTeam');

    }
	
}
