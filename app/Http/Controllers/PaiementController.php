<?php

namespace App\Http\Controllers;
use App\Models\Paiement;
use Illuminate\Http\Request;

class PaiementController extends Controller

{
    /** public function __construct()
    {
        $this->middleware('auth');
    }
   
     * Display a listing of the resource.
     */
    
    
     public function paiement(){
        $paiement=Paiement::latest()->get();
        return view('/Front.paiementlist',compact('paiement'));
    } 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('/Front.paiementlist');
    }

    /**
     * Store a newly ccreated resource in storage.
     */

    public function store( Request $request)
    {
        Paiement::create([
        'nom'=>$request->input('nom'),
        'montant'=>$request->input('montant'),
        'duree'=>$request->input('duree'),
       ]);
        return redirect()->route('paiement.list')->with('info','paiement effectuer');
    //    return redirect('/admin.categorielist')->with('success', 'Categorie ajouté(e) avec succes');
    }
 
    /**
     * Show the form for editing the specified resource.
     */
 
  public function edit(string $id)
{
    $paiement = Paiement::findOrFail($id);

    return view('/Front.paiementedite', compact('paiement'));
}


    /**
     * Update the specified resource in storage.
     */
 
    public function update( Request  $request, string $id)
    { 
        Categorie::Where('id',$id)->update([
        'nom'=>$request->input('nom'),
        'montant'=>$request->input('montant'),
        'duree'=>$request->input('duree')
    ]);  
       return redirect('/Front.paiementlist')->with('success', 'La modification a été effectuer avec succes');
    }


 /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       Categorie::destroy($id);
        $paiement=Paiement::latest()->get();

    //    return view('admin.categorielist')->with('success', 'Suppression effectuer');
        return back()->with("paiement effectuer");

    }
}
