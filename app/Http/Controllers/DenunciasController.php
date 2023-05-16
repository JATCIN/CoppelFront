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
    public function view($id){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::get($url.'/denuncias/'.$id);
        $denuncia = $response->json();
        return view('denunciaView',compact('denuncia'));
    }
    public function update(Request $request){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::put($url.'/denuncias/'.$request->id,[
        'estatus' => $request->estatus,
        'comentarios' => $request->estatus
    ]);
    return redirect()->route('denuncias.index');
    }
}
