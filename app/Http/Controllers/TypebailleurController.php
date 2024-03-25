<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\typebailleur; 
use App\Http\Requests\UpdatetypebailleurRequest;

class TypebailleurController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
     public function typebailleur(){
        $typebailleur=Typebailleur::latest()->get();
    
        return view('typebailleurlist',compact('typebailleur'));
    }





    /**
     * Show the fokjrm for creating a new resource.
     */
    public function create()
    {
        return view ('/admin.typebailleurcreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request)
    {
         Typebailleur::create([
        'libelle'=>$request->input('libelle'),
       ]);
       return redirect('/admin.typebailleurlist')->with('success', 'typebailleur ajouté(e) avec succes');
    }
 
    /**
     * Show the form for editing the specified resource.
     */
   public function edit(string $id)
{
    $typebailleur = Typebailleur::findOrFail($id);
    return view('/admin.typebailleuredite', compact('typebailleuredite'));
}
    /**
     * Update the specified resource in storage.
     */
 
    public function update( Request  $request, string $id)
    { 
        Typebailleur::Where('id',$id)->update([
        'libelle'=>$request->input('libelle')]);  
       return redirect('/admin.typebailleurlist')->with('success', 'La modification a été effectuer avec succes');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       Typebailleur::destroy($id);
       return redirect('/admin.typebailleurlist')->with('success', 'Suppression effectuer');
    }
}

