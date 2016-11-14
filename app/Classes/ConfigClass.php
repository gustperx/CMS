<?php

namespace App\Classes;

use App\Models\Config\Config;

use App\Models\File\File;

use App\Models\Config\SocialLinks;

class ConfigClass {

	private $config;

	private $socialLinks;

	function __construct()
	{
		$this->config = new Config();

		$this->socialLinks = new SocialLinks();
	}

    public function get($data = [])
    {
		return $this->config->findOrFail(1);
    }

    public function social()
    {
		return $this->socialLinks->all();
    }


}
