<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;

use Auth;

use Redirect;

use App\Http\Requests;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    protected $redirectPath;

    public function __construct(){

        $this->redirectPath = route('index_dashboard');

    }
    public function logout(){

        Auth::logout();

        return Redirect::to('/');
        
    }

    public function index()
    {
        return view('templates.login.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
      /*  $message = [

            'title'     => $request->email,

            'text'      => $request->password,

            'type'      => 'error',

            'button'    => 'Volver a intentar',

            'redirect'  => null
        ];

        return response()->json($message, 200);*/

        if($request->ajax())
        {

            if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
            {
                    $message = [

                        'title'    => null,

                        'message'  => null,

                        'icon'     => null,

                        'type'     => null,

                        'redirect' => $this->redirectPath
                    ];

                    return response()->json($message, 200);

            }
            else
            {
                    $message = [

                        'title'     => 'Malas Noticias',

                        'text'      => 'Los datos de ingreso no concuerdan',

                        'type'      => 'error',

                        'button'    => 'Volver a intentar',

                        'redirect'  => null
                    ];

                    return response()->json($message, 200);

            }

        }

    }

 
}
