<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Model;

class SectionModule extends Model
{
	
	protected $table='sections_modules';

    protected $fillable=['module_id','section_id'];
	
}
