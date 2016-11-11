<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Repository\Content\ContentRepository;

class ContentController extends Controller
{
    private $contentRepository;

    function __construct()
    {
        $this->contentRepository = new ContentRepository();
    }

    public function index()
    {
        $title='Lista de Contenidos';

        $contents = $this->contentRepository->getContents(0);

        $breadcrumb = $this->contentRepository->getBreadcrumbIndex();

        return view('templates.content.index',compact('contents','breadcrumb','title'));
    }

    public function create()
    {
        $title='Agregar de Contenido';

        $breadcrumb = $this->contentRepository->getBreadcrumbCreate();

        return view('templates.content.create',compact('breadcrumb','title'));
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
