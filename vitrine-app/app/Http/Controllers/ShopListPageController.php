<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopListPageController extends Controller
{
    public function index($id = null){

        

        $url = "http://localhost:8080/api/businessCategory/stores/$id";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
     
        //Json para Array 
        $resultado['data'] = json_decode(curl_exec($ch), true);

        return view('site.shopListPage', $resultado);

    }
}
