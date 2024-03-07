<?php

namespace App\Http\Controllers;
use App\Models\Bailleur;


use Illuminate\Http\Request;

class BailleurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function bailleur()
    {
        $bailleurs = Bailleur::all();
        return view('bailleurlist', compact('bailleurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bailleurcreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Bailleur::create([
            'nom'=> $request->input('nom'),
            'prenom'=> $request->input('prenom'),
            'tel'=> $request->input('tel'),
        ]);
        return redirect('/bailleurcreate');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bailleurs = Bailleur::findOrFail($id);
        return view('bailleur.show', compact('bailleurs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bailleurs = Bailleur::findOrFail($id);
        return view('bailleuredite', compact('bailleurs'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Bailleur::where('id', $id)->update([
            'nom'=> $request->input('nom'),
            'prenom'=> $request->input('prenom'),
            'tel'=> $request->input('tel'),
            'condition'=> $request->input('condition'),
        ]);
        return redirect('/bailleurlist');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Bailleur::destroy($id);
        return redirect('/bailleurlist');
    }
}


