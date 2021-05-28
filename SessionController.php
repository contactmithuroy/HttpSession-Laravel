<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSessionData(Request $request){
        if($request->session()->has('name')){
            echo $request->session()->get('name');
        }else{
            echo 'No Data in this session';
        }
    }

    public function storeSessionData(Request $request){
        $request->session()->put('name','Jannifer');
        echo "Daata has been addded.";
    }

    public function deleteSessionData(Request $request){
        $request->session()->forget('name');
        echo "Data has been removed from the session";
    }
}
