<?php

namespace App\Models\Config;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
	protected $table='configs';

   	protected $fillable=['title'];
	
	
}
