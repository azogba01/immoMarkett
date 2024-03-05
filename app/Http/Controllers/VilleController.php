<?php

namespace App\Http\Controllers;

use App\Models\Ville;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatevilleRequest;


class VilleController extends Controller
{
     public function ville(){
        $ville=Ville::latest()->get();
    
        return view('villelist',compact('ville'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('villelist');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request)
    {
         categorie::create([
        'nomville'=>$request->input('nomville'),
       ]);
       return redirect('/villelist')->with('success', 'ville ajouté(e) avec succes');
    }
 
    /**
     * Show the form for editing the specified resource.
     */
   public function edit(string $id)
{
    $ville = Ville::findOrFail($id);

    return view('villeedite', compact('ville'));
}
    /**
     * Update the specified resource in storage.
     */
 
    public function update( Request  $request, string $id)
    { 
        Ville::Where('id',$id)->update([
        'nomville'=>$request->input('nomville')]);  
       return redirect('/villelist')->with('success', 'La modification a été effectuer avec succes');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       Categorie::destroy($id);
       return redirect('/villelist')->with('success', 'Suppression effectuer');
    }
}
