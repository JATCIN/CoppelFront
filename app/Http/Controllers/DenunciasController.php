<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DenunciasController extends Controller
{
    public function index()
    {
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::get($url.'/denuncias');
        $data = $response->json();

        return view('denuncias',compact('data'));
    }
    public function create()
    {
        return view('denuncia');
    }
    public function store(Request $request)
    {
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::post($url.'/denuncias',[
            'empresas_id' => $request->empresas_id,
            'paises_id' => $request->paises_id,
            'estado' => $request->estado,
            'usuarios_id' => $request->usuarios_id,
            'detalle' => $request->detalle,
            'fecha' => $request->fecha,
            'contraseña' => $request->contraseña,
            'folio' => $request->folio,
            'numero_centro' => $request->numero_centro,

        ]);
        return redirect()->route('denuncias.index');
    }
    
}
