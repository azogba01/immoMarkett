<?php
namespace App\Http\Controllers;
use App\Models\Propriete;
use App\Models\Categorie;
use Illuminate\Http\Request;
use DB;
class ProprieteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function propriete()
    {
        $propriete = Propriete::all();
        $categorie = Categorie::all();
        return view('/admin.proprietelist', compact('propriete','categorie'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorie = Categorie::all();
        return view('/admin.proprietecreate', compact('categorie'));
    }
    public function proprietesearch()
    {
        // $propriete = Propriete::all();
        return view('/Front.search');
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
            'id_categorie'=> $request->input('id_categorie'),
            'status'=> $request->status=1,
        ]);
        return redirect('/admin.proprietecreate');
    }
        
        // Propriete::create([
        //     'etat'=> $request->input('etat'),
        //     'prix'=> $request->input('prix'),
        //     'superficie'=> $request->input('superficie'),
        //     'condition'=> $request->input('condition'),
        //     'status'=> $request->status=1,
        // ]);
        // return redirect('/proprietecreate');
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
            

            // $fileNametostore='noimage.jpg';

        //     $fileNametostore='noimage.jpg';

        // }
        // $propriete =new Propriete();
        // $propriete ->user_id = auth()->id();
        // $propriete ->nom=$request->input('nom');
        // $propriete ->prix=$request->input('prix');
        // $propriete ->superficie=$request->input('superficie');
        // $propriete ->condition=$request->input('condition'); 
        // $propriete ->propriete_image=$fileNametostore;
        // $propriete ->status=1;
        // $propriete ->save();
        // return redirect('/proprietelist')->back()->with('status','le  propriete   ' .$propriete ->nom.'  a ete bien ajoute');

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $propriete = Propriete::findOrFail($id);
        return view('/admin.propriete.show', compact('propriete'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $propriete = Propriete::findOrFail($id);
        return view('admin.proprieteedite', compact('propriete'));

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
            'status'=> $request->status=1,

        ]);
        return redirect('/admin.proprietelist');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Propriete::destroy($id);
        // return view('admin.proprietelist');
         $propriete = Propriete::all();
         return back()->with("jkbhjbhjb");

    }

    public function searchpropriete(Request $request){
            $type = $request->input('etat');
            $ville = $request->input('prix');
            // $domaine = $request->input('domaine');

            $searchecole = DB::table('proprietes')
                    ->where('etat', 'LIKE', '%'.$etat.'%')
                    ->where('prix','LIKE', '%'.$prix.'%')
                    // ->paginate(6);
            return view('frontend.search',compact('searchpropriete'));
     }

    
    public function searchpropriete(Request $request){
        $query = $request->input('query');

        $searchpropriete = Propriete::orWhere('etat', 'LIKE', "%$query%")
                            ->orWhere('prix', 'LIKE', "%$query%") ->get();
            return view('Front.search',compact('searchpropriete'));
    }
     

}



