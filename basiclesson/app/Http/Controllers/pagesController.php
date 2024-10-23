<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;

class pagesController extends Controller
{
    //
    public function home(){
        return view('pages.home');
    }

    public function apropos(){
        $produits = Product::get();
        return view('pages.apropos')->with('produits', $produits);
    }

    public function services(){
        return view('pages.services');
    }

 

    public function show($id) {
        $produit = Product::find($id);
    
        
        if (!$produit) {
            abort(404, 'Product not found');
        }
    
        return view('pages.show')->with('produit', $produit);
        
    }


}
