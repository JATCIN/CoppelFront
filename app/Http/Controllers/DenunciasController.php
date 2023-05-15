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
}
