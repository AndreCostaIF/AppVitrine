<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class index extends Controller
{
    
    public function index(){

        $url = "http://localhost:8080/api/businessCategory/all";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
     
        //Json para Array 
        $resultado['category'] = json_decode(curl_exec($ch), true);

        return view('site.index', $resultado);

    }
}
