<?php 

namespace App\Repository\Site;

use App\Repository\BaseRepository;

use App\Models\Content\Content;

use App\Models\Menu\MenuSite;

class SiteRepository extends BaseRepository
{
	private $content;

	private $menu;
	
	function __construct()
	{
        parent::__construct();

        $this->content = new Content();

        $this->menu = new MenuSite();

	}

	public function getContent($slug)
	{
		return $this->content->where('slug',$slug)->first();
	}
	public function getMenu()
	{

		return $this->menu->where('parent_id',0)->get();

	}
	public function getHtml($content)
	{

        $body='';$middle='';$botton='';

	    foreach ($content->sections as $section) {

	        $top=view('templates.site.html.section_top',compact('section'));

	        $botton=view('templates.site.html.section_botton');

	        foreach ($section->sectionModule as $sectionModule) {

	            switch ($sectionModule->module->type) {

	                case 'Estático':

	                    $middle.= view('templates.site.modules.'.$sectionModule->module->view,compact('sectionModule'));
			           	
	                    break;

	                case 'Dinámico':

	                    
	                    break;

	                default:

	                    # code...
	                    break;
	            }
	        }
	        //echo $middle;
	        $body.=$top.$middle.$botton;

	        $top='';$middle='';$botton='';

	    }

	    return $body;

	}

}