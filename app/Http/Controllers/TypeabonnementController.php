<?php
namespace App\Http\Controllers;

use App\Models\Typeabonnement;
use Illuminate\Http\Request;

use App\Http\Requests\UpdatetypeabonnementRequest;


class typeabonnementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
     public function typeabonnement(){
        $typeabonnement=Typeabonnement::latest()->get();
        return view('/admin.typeabonnementlist',compact('typeabonnement'));
    } 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('/admin.typeabonnementcreate');
    }

    /**
     * Store a newly ccreated resource in storage.
     */

    public function store( Request $request)
    {
        Typeabonnement::create([
          'nom'=>$request->input('nom'),
        'montant'=>$request->input('montant'),
        'duree'=>$request->input('duree'),
       ]);
       return redirect('/admin.typeabonnementlist')->with('success', 'typeabonnement ajouté(e) avec succes');
    }
 
    /**
     * Show the form for editing the specified resource.
     */
 
  public function edit(string $id)
{
    $typeabonnement = Typeabonnement::findOrFail($id);

    return view('/admin.typeabonnementdit', compact('typeabonnement'));
}


    /**
     * Update the specified resource in storage.
     */
 
    public function update( Request  $request, string $id)
    { 
        Typeabonnement::Where('id',$id)->update([
        'nom'=>$request->input('nom'),
        'montant'=>$request->input('montant'),
        'duree'=>$request->input('duree'),
    ]);  
       return redirect('/admin.typeabonnementlist')->with('success', 'La modification a été effectuer avec succes');
    }


 /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       Typeabonnement::destroy($id);
       return redirect('/admin.typeabonnementlist')->with('success', 'Suppression effectuer');
    }
}
