<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class productController extends Controller
{

    public function create(){
        return view('product.newproduct');
    }

    public function saveproduct(Request $request){
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required',
            'product_description' => 'required',
        ]);
        
        $product = new Product();
        $product->product_name = $request->input('product_name');
        $product->product_price = $request->input('product_price');
        $product->product_description = $request->input('product_description');

        $product->save();

        return redirect('/apropos')->with('status', 'Le produit ' .
                        $request->input('product_name') . ' a été inséré avec succès !');
    }

    public function deleteproduct($id){
        $product = Product::find($id);

        $product->delete();

        return redirect('/apropos')->with('status', 'Votre produit a été supprimé avec succès !');
    }

    public function editproduct($id){
        $produit = Product::find($id);
    
        
        if (!$produit) {
            abort(404, 'Product not found');
        }
    
        return view('product.edit')->with('produit', $produit);
    }

    public function update(Request $request){
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required',
            'product_description' => 'required',
        ]);
        
        $product = new Product();
        $product->product_name = $request->input('product_name');
        $product->product_price = $request->input('product_price');
        $product->product_description = $request->input('product_description');

        $product->save();

        return redirect('/apropos')->with('status', 'Le produit ' .
                        $request->input('product_name') . ' a été modifié avec succès !');
    }

}
