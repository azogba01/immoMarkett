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
            'status'=> $request->status=1,
        ]);
        return redirect('/proprietecreate');
        // $this->validate($request, [
        // 'nom'=>'required|unique:proprietes',
        // 'prix'=>'required',
        // 'superficie'=>'required',
        // 'condition'=>'required',]);
        // 'prpriete_image'=>'image|nullable|max:1999']);

        // if($request->hasFile('propriete_image')){
        //    //1-select image with extension
        //    $fileNameWithExt=$request->file('propriete_image')->getClientOriginalName();
        //    //2-get just file name
        //    $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        //    //3-get just extension
        //     $extension = $request->file('propriete_image')->getClientOriginalExtension();
        //    //4-file name store
        //    $fileNametostore=$fileName.'_'.time().'.'.$extension;
        //    //uplaoder l'image
        //    $path=$request->file('propriete_image')->move('propriete_images/propriete_images',
        //               $fileNametostore);
        // }
        // else{
            
        //     $fileNametostore='noimage.jpg';
        // }
        // $propriete =new Propriete();
        // // $propriete ->user_id = auth()->id();
        // $propriete ->nom=$request->input('nom');
        // $propriete ->prix=$request->input('prix');
        // $propriete ->superficie=$request->input('superficie');
        // $propriete ->condition=$request->input('condition'); 
        // // $propriete ->propriete_image=$fileNametostore;
        // $propriete ->status=1;
        // $propriete ->save();
        // return redirect()->back()->with('status','le  propriete   ' .$propriete ->nom.'  a ete bien ajoute');

// >>>>>>> 05361b7d2b4321636a4384364405e1afdd520153
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
            'image'=> $request->input('image'),

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

