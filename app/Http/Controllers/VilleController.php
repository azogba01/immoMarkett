<?php

namespace App\Http\Controllers;

use App\Models\Ville;
use Illuminate\Http\Request;
 

class VilleController extends Controller
{
    public function ville()
    {
        $villes = Ville::latest()->get();
        return view('villelist', compact('villes'));
    }


    
    public function create()
    {
        return view('villecreate');
    }

     public function store(Request $request)
    {
        Ville::create([
            'nomville'=>$request->input('nomville'), ]);
       return redirect('/villelist')->with('success', 'ville ajouté(e) avec succes');
    }
 
    public function edit(int $id)
    {
        $ville = Ville::findOrFail($id);
        return view('villeedite', compact('ville'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
        'nomville' => 'required', // Assurez-vous que le champ nomville est requis
    ]);

    Ville::where('id', $id)->update([
        'nomville' => $request->input('nomville'),
    ]);

    return redirect('/villelist')->with('success', 'La modification a été effectuée avec succès');
    }

    public function destroy($id)
    {
        Ville::destroy($id);
        return redirect('/villelist')->with('success', 'Suppression effectuée');
    }
}
