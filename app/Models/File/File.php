<?php

namespace App\Models\File;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
	protected $table='files';

    protected $fillable=['file','thumb','user_id','title','alt','description'];
	
}
