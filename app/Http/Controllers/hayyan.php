<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hayyan extends Controller
{
    public function index(){
        return view('newview');
    }
    public function show($id){
        return view('ID') ;
    }
}
