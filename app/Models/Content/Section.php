<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
	protected $table='sections';

    protected $fillable=['title','subtitle','color','text_align','content_id'];	
	
    public function animation()
    {

    	return $this->hasOne('App\Models\Config\Animation','id','animation_id');
    	
    }

    public function sectionModule()
    {

    	return $this->hasMany('App\Models\Content\SectionModule','section_id','id');

    }
}
