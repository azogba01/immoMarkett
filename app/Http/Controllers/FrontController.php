<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function accueil(){
        return view('Front.accueil');
       }
       public function about(){
        return view('Front.about');
       }
       public function agent_grid(){
        return view('Front.agent-grid');
       }
       public function agent_single(){
        return view('Front.agent-single');
       }
       public function contact(){
        return view('Front.contact');
       }
       public function property_grid(){
        return view('Front.property-grid');
       }
       public function property_single(){
        return view('Front.property-single');
       }
       public function blog_grid(){
        return view('Front.blog-grid');
       } 
        public function inscription(){
        return view('Front.inscription');
       }
        public function connection(){
        return view('Front.login');
       }
}
