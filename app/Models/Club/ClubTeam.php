<?php

namespace App\Models\Club;

use Illuminate\Database\Eloquent\Model;

class ClubTeam extends Model
{
	protected $table='clubs_teams';

    protected $fillable=['id','logo','name','about','members'];
	
    public function position()
    {

    	return $this->hasMany('App\Models\Club\Position');

    }
}
