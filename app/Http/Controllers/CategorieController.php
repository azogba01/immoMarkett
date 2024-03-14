<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

use App\Http\Requests\UpdatecategorieRequest;


class CategorieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    
     public function categorie(){
        $categorie=Categorie::latest()->get();
        return view('/admin.categorielist',compact('categorie'));
    } 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('/admin.createcategorie');
    }

    /**
     * Store a newly ccreated resource in storage.
     */

    public function store( Request $request)
    {
        Categorie::create([
        'libelle'=>$request->input('libelle'),
       ]);
        return redirect()->route('categorie.list')->with('info','DEFRGT');
    //    return redirect('/admin.categorielist')->with('success', 'Categorie ajouté(e) avec succes');
    }
 
    /**
     * Show the form for editing the specified resource.
     */
 
  public function edit(string $id)
{
    $categorie = Categorie::findOrFail($id);

    return view('/admin.categoriedit', compact('categorie'));
}


    /**
     * Update the specified resource in storage.
     */
 
    public function update( Request  $request, string $id)
    { 
        Categorie::Where('id',$id)->update([
        'libelle'=>$request->input('libelle')
    ]);  
       return redirect('/admin.categorielist')->with('success', 'La modification a été effectuer avec succes');
    }


 /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       Categorie::destroy($id);
        $categorie=Categorie::latest()->get();

    //    return view('admin.categorielist')->with('success', 'Suppression effectuer');
        return back()->with("jkbhjbhjb");

    }
}
