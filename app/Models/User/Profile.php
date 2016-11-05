<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $table='profiles';

    protected $fillable = ['name','lastname','dni','address','phone_1','phone_2'];

} 
