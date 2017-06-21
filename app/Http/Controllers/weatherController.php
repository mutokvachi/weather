<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class weatherController extends Controller
{
    public function show(){
    	// $weather = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=Tbilisi&appid=78f69e7e8bf86dd3d9d6afb00c651751');
    	return view('welcome');
    }

    public function check(Request $request){
    	$weather = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q='.$request->country.'&appid=78f69e7e8bf86dd3d9d6afb00c651751');
    	$weather = json_decode($weather);
    	
    	$result = ['country'=>$weather->name, 'temp'=>$weather->main->temp];
   
    	return view('welcome',compact('result'));
    	
    }
}
