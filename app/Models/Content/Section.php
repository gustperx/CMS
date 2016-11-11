<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
	protected $table='sections';

    protected $fillable=['title','subtitle','color','text_align','content_id'];	
	
}
