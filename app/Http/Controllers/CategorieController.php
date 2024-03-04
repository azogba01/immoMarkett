<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //      $categorie=Categorie::all();
    //            // $salle->etudiants->get();
    //             return view('categorie',compact('categorie'));
    // }
     public function categorie(){
        $categorie=Categorie::latest()->get();
    
        return view('categorielist',compact('categorie'));
    }





    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('createcategorie');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request)
    {
         categorie::create([
        'libelle'=>$request->input('libelle'),
       
       ]);
       return redirect('/categorielist')->with('success', 'Categorie ajouté(e) avec succes');
    }
 

    /**
     * Show the form for editing the specified resource.
     */
   public function edit(string $id)
{
    $categorie = Categorie::findOrFail($id);

    return view('editecategorie', compact('categorie'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update( Request  $request, string $id)
    { 
        Categorie::Where('id',$id)->update([
        'libelle'=>$request->input('libelle')]);  
       return redirect('/categorielist')->with('success', 'La modification a été effectuer avec succes');
    }

    
 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       Categorie::destroy($id);
     return redirect('/categorielist')->with('success', 'Suppression effectuer');
    }
}
