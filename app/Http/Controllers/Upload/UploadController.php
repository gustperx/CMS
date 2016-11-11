<?php

namespace App\Http\Controllers\Upload;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Repository\Upload\UploadRepository;

use Intervention\Image\Facades\Image;

use stdClass;

use Auth;

class UploadController extends Controller
{

    private $local;

    private $path;

    private $uploadRepository;

    public function __construct()
    {

        $this->uploadRepository = new UploadRepository();

    }
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
       // dd($request->all());

        $response = new stdClass();

        $this->local = public_path($request->routeFile.Auth::id());

        $this->path = $request->routeFile.Auth::id().'/';

        $file = $request->file('file');

        if($file->getError()==0){

            $fileName = $file->getClientOriginalName();

            $file->move($this->local,$fileName);

            $route = '/'.$this->path.$fileName;

            $fileId = $this->uploadRepository->fileCreate($route);

            $response->url = $route;

            $response->fileId = $fileId;

            $response->status = 'OK';

            return response()->json(array($response));

        }else{

            $response->status = 'ERROR';

            return response()->json(array($response));


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
        //
    }
}
