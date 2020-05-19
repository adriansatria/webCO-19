<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{
    public function index(){
	    return view('pages.index');
    }

    public function login(){
        return view('login');
    }

    public function index2(){
	    return view('pages.index2');
    }

    public function edit(){
        return view('form.statistik');
    }

    public function odp(){
        return view('form.odp');
    }

    public function pdp(){
        return view('form.pdp');
    }
}
?>