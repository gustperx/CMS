<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Repository\Site\SiteRepository;

use App\Models\Module\Element;

use Config;

class SiteController extends Controller
{

	private $siteRepository;

    private $menus;

    private $body;

	function __construct()
	{

		$this->siteRepository = new SiteRepository;

        $this->menus = $this->siteRepository->getMenu();


	}

    public function index()
    {

        $menus = $this->menus;

        $slug=Config::get()->home->slug;
        
        $content = $this->siteRepository->getContent($slug);

        $title = Config::get()->site_title.' - '. $content->title;

        $body = $this->siteRepository->getHtml($content);

        return view('templates.site.index',compact('content','body','title','menus'));

    }

    public function content($slug)
    {	
        $body='';$middle='';$botton='';

        $menus = $this->menus;

    	$content = $this->siteRepository->getContent($slug);
    	
        $title = Config::get()->site_title.' - '. $content->title;

        $body = $this->siteRepository->getHtml($content);

        return view('templates.site.index',compact('content','body','title','menus'));

    }
}
