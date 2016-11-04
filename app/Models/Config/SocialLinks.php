<?php

namespace App\Models\Config;

use Illuminate\Database\Eloquent\Model;

class SocialLinks extends Model
{
	protected $table='social_links';

    protected $fillable=['url','social_id'];

    public function social()
    {

    	return $this->hasOne('App\Models\Config\Social','id','social_id');

    }
	
	
}
