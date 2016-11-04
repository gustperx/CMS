<?php

namespace App\Models\Club;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{

	protected $table='clubs';

    protected $fillable=['name','about','members','state_id'];

    public function clubTeam()
    {

    	return $this->hasMany('App\Models\Club\ClubTeam');

    }
	
}
