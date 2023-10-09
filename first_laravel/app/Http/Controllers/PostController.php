<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
       // return view('contact.index');
       return "This is an index function of controller";
      
    }
    public function example1(){
        return "This is an example 1 of controller post!";
    }
    public function example2($id){
        return "This is an example 1 of controller post! $id";
    }
}
