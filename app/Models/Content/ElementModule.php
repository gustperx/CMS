<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Model;

class ElementModule extends Model
{
	
	protected $table='elements_modules';

    protected $fillable=['elements_id','content','section_module_id'];
	
	
}
