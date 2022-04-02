<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WrapperController extends Controller
{
    public function forward(){
        $json= Http::get('https://api.opencagedata.com/geocode/v1/json?key=7f06c8c97926444f90b176226230f3e0')->json();
        return response()->json($json);
    }
    public function reserve(Request $q){
        $a = $q->q;   
        $json= Http::get('https://api.opencagedata.com/geocode/v1/json?q='.$a.'&key=7f06c8c97926444f90b176226230f3e0')->json();
        return response()->json($json);
    }
    public function forwardw(Request $address){
        $a = $address->address;   
        $json= Http::get('https://api.opencagedata.com/geocode/v1/google-v3-json?address='.$a.'&key=7f06c8c97926444f90b176226230f3e0')->json();
        return response()->json($json);
    }
}
