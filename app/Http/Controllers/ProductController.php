<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all(); // vindt alle producten

        return view('product.index', compact('products'));
        // laat de index.blade.php zien in product mapje en stuurt products variable naar de view
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $category = Category::all(); // categorien laten zien

        return view('product.create', compact('category')); // return naar create view met category variable
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product(); // nieuwe product

        $product->name = $request->input('name'); // naam
        $product->description = $request->input('description'); // omschrijving
        $product->price = $request->input('price'); // prijs
        $product->stock = $request->input('stock'); // voorraad
        $product->category_id = $request->input('category_id'); // categorie
        $product->save();  // save alles


        return redirect('product'); // return naar alle producten
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id); // vindt product id

        $category = Category::all(); // alle categorien

        return view('product.edit', compact('product', 'category')); // laat de edit.blade.php zien in product mapje en 
        // stuur de $product variable mee naar de view
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Product::find($id)->fill($request->input())->save(); // zoek id en update het met nieuwe data in de input fields
        return redirect('product'); // terug naar vorige pagina
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete(); // vindt product id en verwijder het
        return redirect()->back(); // redirect terug
    }
}
