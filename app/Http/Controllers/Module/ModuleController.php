<?php

namespace App\Http\Controllers\Module;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Repository\Module\ModuleRepository;

class ModuleController extends Controller
{
    public $moduleRepository;

    public function __construct()
    {

        $this->moduleRepository = new ModuleRepository();

    }

    public function index()
    {

        $breadcrumb = $this->moduleRepository->getBreadcrumbIndex();

        $title='Lista de Modulos';

        $modules = $this->moduleRepository->getModules(0);

        return view('templates.module.index',compact('modules','breadcrumb','title'));

    }

    public function create()
    {

        $breadcrumb = $this->moduleRepository->getBreadcrumbCreate();

        $title='Agregar Modulo';

        return view('templates.module.create',compact('breadcrumb','title'));

    }

    public function store(Request $request)
    {

        $this->moduleRepository->createModule($request->all());
        
        if($request->ajax())
        {

            $message = [

                'title'     => 'Felicidades',

                'text'      => 'Los datos se han guardado con exito ',

                'type'      => 'success',

                'button'    => 'Ok',

                'reset'     => 1,                

                'redirect'  => null
            ];

            return response()->json($message, 200);

        }
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
        $this->moduleRepository->deleteModule($id);

        $message = [

            'title'     => 'Datos Eliminados',

            'text'      => 'Se han eliminado los datos satisfactoriamente',

            'type'      => 'success',

            'button'    => 'Ok',

            'reset'     => 0,

            'redirect'  => null
        ];

        return response()->json($message, 200);
    }
}
