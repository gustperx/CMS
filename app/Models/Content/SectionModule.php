<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Model;

class SectionModule extends Model
{
	
	protected $table='sections_modules';

    protected $fillable=['module_id','section_id'];

    public function module()
    {

    	return $this->hasOne('App\Models\Module\Module','id','module_id');

    }

    public function elements()
    {

    	return $this->hasMany('App\Models\Module\Element','module_id','module_id');
    	
    }
	
    public function elementsModules()
    {

        return $this->hasMany('App\Models\Content\ElementModule','section_module_id','id');
        
    }
    
}
