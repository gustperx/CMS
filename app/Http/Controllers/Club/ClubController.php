<?php

namespace App\Http\Controllers\Club;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Repository\Club\ClubRepository;

class ClubController extends Controller
{
    private $clubRepository;
    
    public function __construct()
    {
        $this->clubRepository = new ClubRepository();
    }

    public function index()
    {
        $clubs = $this->clubRepository->getClub(0);

        $breadcrumb = $this->clubRepository->getBreadcrumbIndex();

        $title = 'Lista de Clubes Afiliados';

        return view('templates.club.index',compact('clubs','title','breadcrumb'));

    }

    public function create()
    {

        $breadcrumb = $this->clubRepository->getBreadcrumbCreate();

        $title = 'Agregar Club';

        $stateId = $this->clubRepository->getState();

        $cityId = $this->clubRepository->getCity(1);
        
        return view('templates.club.create',compact('title','breadcrumb','stateId','cityId','userId'));

    }

    public function store(Request $request)
    {
        $this->clubRepository->createClub($request->all());
        
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
        $this->clubRepository->deleteClub($id);

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
