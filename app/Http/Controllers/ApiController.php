<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class ApiController extends Controller
{



    public function get1(){
       $res=Http::get('https://api.fastforex.io/convert?from=USD&to=EUR&amount=3&api_key=97356aba86-b9f041158b-ruwn6j')->JSON();
    return $res;
 }
 public function get2(){
       $res=Http::get('https://api.fastforex.io/convert?from=USD&to=EGP&amount=3&api_key=97356aba86-b9f041158b-ruwn6j')->JSON();
    return $res;
 }
 public function get3(){
    $res=Http::get('https://api.fastforex.io/convert?from=USD&to=AED&amount=3&api_key=97356aba86-b9f041158b-ruwn6j')->JSON();
 return $res;
}

public function fetchall(){
    $res=Http::get('https://api.fastforex.io/fetch-all?api_key=97356aba86-b9f041158b-ruwn6j')->json();
    return $res;
}


public function getusers(){
    $res=Http::get("https://reqres.in/api/users?page2")->json();
    return $res;
}

public function postusers(){
    $res=Http::post("https://reqres.in/api/users",['name' => 'mohamed',
    'job' => 'tester'])->json();
    return $res;
}



public function registeruser(){
    $res=Http::post("https://reqres.in/api/register",['email' => 'eve.holt@reqres.in',
    'password' => 'pistol'])->json();
    return $res;
}




public function putusers(){
    $res=Http::put("https://reqres.in/api/users/2",['name' => 'walled',
    'job' => 'dev'])->json();
    return $res;
}
public function deleteusers(){
    $res=Http::delete("https://reqres.in/api/users/2");
    return $res->noContent();
}

}
