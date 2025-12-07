<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TestController extends Controller
{
    //

    public function page(){
        return view('page.formulaire');
    }

    public function authpage(){
        return view('page.login');
    }
    

    public function liste(){
        return view('page.liste');
    }

    public function save_todo(Request $r){
        dd($r);
    }
}
