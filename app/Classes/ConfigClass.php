<?php

namespace App\Classes;

use App\Models\Config\Config;

use App\Models\File\File;

class ConfigClass {

	private $config;

	function __construct()
	{
		$this->config = new Config();
	}

    public function get($data = [])
    {
		return $this->config->findOrFail(1);
    }



}
