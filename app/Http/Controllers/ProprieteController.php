<?php

namespace App\Http\Controllers;
use App\Models\Produit;

use Illuminate\Http\Request;

class ProprieteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proprietes = Propriete::all();
        return view('proprietes.index', compact('proprietes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proprietes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Propriete::create([
            'nom'=> $request->input('nom'),
            'prix'=> $request->input('prix'),
        ]);
        return redirect('/proprietes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $propriete = Propriete::findOrFail($id);
        return view('proprietes.show', compact('propriete'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $propriete = Propriete::findOrFail($id);
        return view('proprietes.edit', compact('propriete'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Propriete::where('id', $id)->update([
            'nom'=> $request->input('nom'),
            'prix'=> $request->input('prix'),
        ]);
        return redirect('/proprietes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Propriete::destroy($id);
        return redirect('/proprietes');
    }
}

