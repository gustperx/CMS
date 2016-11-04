<?php

namespace App\Http\Controllers\Config;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Repository\Config\ConfigRepository;

class ConfigController extends Controller
{
    private $configRepository;

    public function __construct(){

        $this->configRepository = new ConfigRepository();

    }

    public function index()
    {
        $configs = $this->configRepository->getConfig();

        $title = 'Configuracion de la Pagina';

        $breadcrumb = $this->configRepository->getBreadcrumbIndex();

        return view('templates.config.index',compact('configs','title','breadcrumb'));

    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
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
        $config= $this->configRepository->updateConfig($id,$request->all());

        if($request->ajax())
        {

            $message = [

                'title'     => 'Felicidades',

                'text'      => 'Los datos se han actualizado con exito ',

                'type'      => 'success',

                'button'    => 'Ok',

                'reset'     => 0,

                'redirect'  => null
            ];

            return response()->json($message, 200);
        }
    }


    public function destroy($id)
    {
        //
    }
}
