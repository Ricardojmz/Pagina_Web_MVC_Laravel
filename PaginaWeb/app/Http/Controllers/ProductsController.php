<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProductRequest;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
		return view('portafolio', [
			'portafolio' => Product::latest()->paginate(5)
		]);
    }
    public function index2(){
    		return view('/administrators/control/portafolio_admin', [
			'portafolio' => Product::latest()->paginate(10)
		]);
    }
    public function show(Product $product)
    {
    	return view('/administrators/control/portafolio/show', [
    		'product'=> $product
    	]);
    }
    public function create()
    {
    	return view('/administrators/control/portafolio/create');
    }
    public function store(SaveProductRequest $request){

    	Product::create($request->validated());
    	return redirect()->route('portafolio_admin')->with('status', 'El producto fue agregado');
    }
    public function edit(Product $product)
    {
    	return view('/administrators/control/portafolio/edit', [
    		'product'=> $product
    	]);
    }
    public function update(Product $product, SaveProductRequest $request)
    {
    	$product->update($request->validated());
    	return redirect()->route('portafolio_admin.show', $product)->with('status', 'El producto fue actualizado');
    }
    public function destroy(Product $product)
    {
    	$product->delete();
    	return redirect()->route('portafolio_admin')->with('status', 'El producto fue eliminado');
    }
 }
