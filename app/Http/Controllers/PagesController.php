<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {
    public function index(){
        $title = 'Bem vindo ao Laravel!';
        return view('index')->with('title', $title);
    }
}