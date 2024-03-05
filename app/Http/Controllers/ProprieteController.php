<?php

namespace App\Http\Controllers;
use App\Models\Propriete;

use Illuminate\Http\Request;

class ProprieteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function propriete()
    {
        $propriete = Propriete::all();
        return view('proprietelist', compact('propriete'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proprietecreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Propriete::create([
            'etat'=> $request->input('etat'),
            'prix'=> $request->input('prix'),
            'superficie'=> $request->input('superficie'),
            'condition'=> $request->input('condition'),
        ]);
        return redirect('/proprietecreate');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $propriete = Propriete::findOrFail($id);
        return view('propriete.show', compact('propriete'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $propriete = Propriete::findOrFail($id);
        return view('proprieteedite', compact('propriete'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Propriete::where('id', $id)->update([
            'etat'=> $request->input('etat'),
            'prix'=> $request->input('prix'),
            'superficie'=> $request->input('superficie'),
            'condition'=> $request->input('condition'),
        ]);
        return redirect('/proprietelist');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Propriete::destroy($id);
        return redirect('/proprietelist');
    }
}

