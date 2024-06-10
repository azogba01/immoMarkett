<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\abonnement;
use illuminate\Support\Facades\Auth;
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
        $dateduJour = Carbon::now();
        $DateFin=$dateduJour->addMonths(2);
         dd( $DateFin);
        $dateduJour = $dateduJour->toDateString();
        abonnement::create([
        "duree"=> 2,
        "datedebut"=> $dateduJour,        
        "datefin"=> $DateFin,        
        "montant"=> 4000,        
        "user_id"=> Auth::user()->id,
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
        'datefin'=>$request->input('datefin'),
    ]);  
       return redirect('/admin.typeabonnementlist')->with('success', 'La modification a été effectuer avec succes');
    }


 /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       Typeabonnement::destroy($id);
        return back()->with("jkbhjbhjb");
        $typeabonnement=Typeabonnement::latest()->get();

    //    <!-- return redirect('/admin.typeabonnementlist')->with('success', 'Suppression effectuer'); -->
    }
}
