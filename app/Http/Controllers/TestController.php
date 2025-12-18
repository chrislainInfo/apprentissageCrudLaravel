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

        $donnee = Todo::all('id','libelle', 'description');
        // dd($donnee);
        // $donnee = Todo::get();

        return view('page.liste', compact('donnee'));
    }

    public function editList ($id) {
        // $data = Todo::find($id);
        // $data = Todo::findOrFail($id);
        $data = Todo::where('id', $id)->first();
        // dd($data);

        if (!$data) {
            return back()->with('error', 'todo non trouve');
        }
        
        return view('page.editList', compact('data'));
    }

    public function showList ($id) {
        $data = Todo::where('id', $id)->first();

        if (!$data) {
            return back()->with('error', 'todo non trouve');
        }
        
        return view('page.show', compact('data'));
    }
    public function delete ($id) {
        $data = Todo::where('id', $id)->delete();

        // if (!$data) {
        //     return back()->with('error', 'todo non trouve');
        // }
        
        return redirect()->route('listes')->with('success', 'tache supprimee');
    }

    public function updateList (Request $r, $id) {
         $result = $r->validate([
            'libelle' => 'required|max:25|min:1', 'description' => 'nullable'
        ]);

        Todo::where('id', $id)->update([
            'libelle' => $result['libelle'],
            'description' => $result['description']
        ]);
        
        return redirect()->route('listes')->with('success', 'tache modifie');
    }

    public function save_todo(Request $r){
        $result = $r->validate([
            'libelle' => 'required|max:25|min:1', 'description' => 'nullable'
        ]);
        // $enregistrement = new Todo();

        // $enregistrement->libelle = $r->libelle;
        // $enregistrement->description = $r->description;
        // $enregistrement->save();

        Todo::create([
            'libelle' => $r->libelle,
            'description' => $r->description
        ]);


        return back()->with('success', 'Tache enregistré avec succès !');
    }
}
