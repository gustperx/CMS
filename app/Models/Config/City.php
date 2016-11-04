<?php

namespace App\Models\Config;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
	protected $table='cities';

    protected $fillable=['city','state_id'];
	
}
