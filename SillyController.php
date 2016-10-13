<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SillyController extends Controller
{
    public function getIndex(){
        return view('sillyjax');
    }
  
    public function postIndex(Request $request){
      //return "Hello there: Mr " . $request->name;
      
      if( $request->ajax() ) {
        return response()->json([
            'Hi there ' . $request->name
        ]);
      }
      
      else{
        return "Boom normal post works too!";
      }
      
    }
}
