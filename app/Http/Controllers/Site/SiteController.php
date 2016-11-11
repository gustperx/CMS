<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Repository\Site\SiteRepository;

class SiteController extends Controller
{

	private $siteRepository;

	function __construct()
	{

		$this->siteRepository = new SiteRepository;

	}

    public function index()
    {

        return view('templates.site.index');

    }

    public function content($slug)
    {	

    	$contents = $this->siteRepository->getContent($slug);
    	
    	foreach ($contents as $content) {

    		echo $content->title;

    		foreach ($content->sections() as $section) {

    			dd($section->title);

    		}

    	}
        //return view('templates.site.index',compact('content'));

    }
}
