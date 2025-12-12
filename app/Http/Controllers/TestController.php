<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Todo;

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

        $donnee = Todo::all();

        return view('page.liste', ['donnes' => $donnee]);
    }

    public function save_todo(Request $r){
        
        $result = $r->validate([
            'libelle' => 'required'
        ]);

        Todo::create($result);

        return redirect()->back()->with('success', 'Tache enregistré avec succès !');
    }
}
