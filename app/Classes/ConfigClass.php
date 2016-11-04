<?php

namespace App\Classes;
use App\Models\Config\Config;

class ConfigClass {
    public function get($data = [])
    {
		$config=Config::findOrFail(1);

		return $config;
    }
}
