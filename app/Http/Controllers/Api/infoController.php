<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class infoController extends Controller
{
    public function index() {

        $response = Http::get('http://localhost/My%20File/latihan/Laravel/lat_rest_server/public/api/buku');
        $data = $response->json();
    
        return view('index', compact('data'));
    }
}
