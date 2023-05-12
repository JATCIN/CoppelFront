<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class SeguimientoDenunciaController extends Controller
{
    public function index(){
      
    }

    public function create(){
        return view('seguimientoDenuncia');
    }

    public function store(Request $request){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::post($url.'/seguimiento-denuncia', [
            'folio' => $request->folio,
            'contraseña' => $request->contraseña
        ]);
    
        $data = json_decode($response->body(), true);
    
        
        if (!empty($data) && isset($data['folio'])) { 
            
            return view('seguimiento', ['denuncia' => $data]);

        } else {
            
            session()->flash('error', 'No se encontró la denuncia');
            return redirect()->back();
        }
}

}