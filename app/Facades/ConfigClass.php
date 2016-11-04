<?php

namespace App\Facades;
use Illuminate\Support\Facades\Facade;

class ConfigClass extends Facade{
    protected static function getFacadeAccessor() { return 'ConfigClass'; }
}
