<?php

namespace App\Http\Controllers;

use App\Models\typeproprietaire;
use App\Http\Requests\StoretypeproprietaireRequest;
use App\Http\Requests\UpdatetypeproprietaireRequest;

class TypeproprietaireController extends Controller
{
     public function typeproprietaire(){
        $typeproprietaire=Typeproprietaire::latest()->get();
    
        return view('typeproprietairelist',compact('typeproprietaire'));
    }





    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('typeproprietairecreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request)
    {
         typeproprietaire::create([
        'libelle'=>$request->input('libelle'),
       ]);
       return redirect('/typeproprietairelist')->with('success', 'typeproprietaire ajouté(e) avec succes');
    }
 
    /**
     * Show the form for editing the specified resource.
     */
   public function edit(string $id)
{
    $typeproprietaire = typeproprietaire::findOrFail($id);

    return view('typeproprietaireedite', compact('typeproprietaire'));
}
    /**
     * Update the specified resource in storage.
     */
 
    public function update( Request  $request, string $id)
    { 
        typeproprietaire::Where('id',$id)->update([
        'libelle'=>$request->input('libelle')]);  
       return redirect('/typeproprietairelist')->with('success', 'La modification a été effectuer avec succes');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       typeproprietaire::destroy($id);
       return redirect('/typeproprietairelist')->with('success', 'Suppression effectuer');
    }
}

