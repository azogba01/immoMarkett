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
    public function admin(){
        return view('admin.index');
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
        $requestData = $request->all();
        $fileName = time().$request->file('propriete_image')->getClientOriginalName();
        $path = $request->file('propriete_image')->storeAs('images', $fileName, 'public');
        $requestData["propriete_image"] = '/storage/'.$path;
        Propriete::create($requestData);
        return redirect('/admin.proprietelist')->with('flash_message', 'Propriete Addedd!');
    }
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
        // return ffview('admin.proprietelist');
         $propriete = Propriete::all();
         return back()->with("jkbhjbhjb");

    }

    
    public function searchpropriete(Request $request){
        $query = $request->input('query');

        $searchpropriete = Propriete::orWhere('etat', 'LIKE', "%$query%")
                            ->orWhere('prix', 'LIKE', "%$query%") ->get();
            return view('/Front.search',compact('searchpropriete'));
    }
     

}



