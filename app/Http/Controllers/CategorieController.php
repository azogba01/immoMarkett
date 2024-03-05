<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatecategorieRequest;


class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
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
<<<<<<< HEAD
 
     */
 
  public function edit(string $id)
=======
     */
   public function edit(string $id)
>>>>>>> 9f17a1be83e42f4394a26bc78135dddaceea91f0
{
    $categorie = Categorie::findOrFail($id);

    return view('editecategorie', compact('categorie'));
}
<<<<<<< HEAD

  

=======
>>>>>>> 9f17a1be83e42f4394a26bc78135dddaceea91f0
    /**
     * Update the specified resource in storage.
     */
 
    public function update( Request  $request, string $id)
    { 
        Categorie::Where('id',$id)->update([
        'libelle'=>$request->input('libelle')]);  
       return redirect('/categorielist')->with('success', 'La modification a été effectuer avec succes');
    }
<<<<<<< HEAD

 /**
=======
    /**
>>>>>>> 9f17a1be83e42f4394a26bc78135dddaceea91f0
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       Categorie::destroy($id);
       return redirect('/categorielist')->with('success', 'Suppression effectuer');
    }
}
