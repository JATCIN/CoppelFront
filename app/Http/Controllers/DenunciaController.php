<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DenunciaController extends Controller
{
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
            'estados_id' => $request->estados_id,
            'nombre' => $request->nombre,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
            'detalle' => $request->detalle,
            'fecha' => $request->fecha,
            'contraseña' => $request->contraseña,
            'numero_centro' => $request->numero_centro,

        ]);
        $data = json_decode($response->body(), true);

        if (isset($data['denuncias'])) {
            $denuncias = $data['denuncias'];
            return view('datosDenuncia', ['denuncia' => $data['denuncias']]);
        } else {
            return response()->json(['message' => 'Error al crear la denuncia'], 500);
        }
    }

}
