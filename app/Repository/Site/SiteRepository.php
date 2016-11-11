<?php 

namespace App\Repository\Site;

use App\Repository\BaseRepository;

use App\Models\Content\Content;

class SiteRepository extends BaseRepository
{
	private $content;
	
	function __construct()
	{
        parent::__construct();

        $this->content = new Content;
	}

	public function getContent($slug)
	{
		return $this->content->where('slug',$slug)->first();
	}

}