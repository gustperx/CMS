<?php

namespace App\Http\Controllers\Social;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Repository\Social\SocialRepository;

class SocialController extends Controller
{
    private $socialRepository;

    public function __construct()
    {

        $this->socialRepository= new SocialRepository();

    }

    public function index()
    {
        $socials = $this->socialRepository->getSocialLinks(0);

        $breadcrumb = $this->socialRepository->getBreadcrumbIndex();

        $title='Nuestras de Redes Sociales';

        return view('templates.social.index',compact('socials','breadcrumb','title'));
    }

    public function create()
    {
        $breadcrumb = $this->socialRepository->getBreadcrumbCreate();

        $socialId = $this->socialRepository->getSocial();

        $title='Agregar Rede Social';        

        return view('templates.social.create',compact('breadcrumb','socialId', 'title'));
    }

    public function store(Request $request)
    {

        $this->socialRepository->createSocialLinks($request->all());
        
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
        $social = $this->socialRepository->getSocialLinks($id);

        $socialId= $this->socialRepository->getSocial();
        
        $breadcrumb = $this->socialRepository->getBreadcrumbEdit();

        $title='Editar Red Social';        

        return view('templates.social.edit',compact('breadcrumb','social','socialId','title'));
    }

    public function update(Request $request, $id)
    {
        $social= $this->socialRepository->updateSocialLinks($id,$request->all());

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
        $this->socialRepository->deleteSocialLinks($id);

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
