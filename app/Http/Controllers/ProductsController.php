<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     * GET /api/products
     */
    public function index()
    {
        // retrieve all products
        return Product::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /api/products
     */
    public function store(Request $request)
    {
        // Validate the data
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'responsibilites_id' => 'required|exists:responsibilities,id'
        ]);

        // Create a new product
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->responsibility_id = $request->responsibility_id;
        $product->save();

        return $product;
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product,$id)
    {
        // Find product by id
        return Product::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /api/products/{id}
     */
    public function update(Request $request, Product $product, $id)
    {
        // Validate data
        $request->validate([
            'name' => 'sometimes|string',
            'price' => 'sometimes|numeric',
            'responsibility_id' => 'sometimes|exists:responsibilites,id'
        ]);

        // Find product by id
        $product = Product::findOrFail($id);

        // Update the product attributes
        $product->name = $request->name ?? $product->name;
        $product->price = $request->price ?? $product->price;
        $product->responsibility_id = $request->responsibility_id ?? $product->responsibility_id;
        $product->save();

        return $product;
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /api/products/{id}
     */
    public function destroy(Product $product, $id)
    {
        // Find product by id
        $product = Product::findOrFail($id);

        // delete product
        $product->delete();

        // Success Message
        return response()->json(['message' => 'Product deleted successfully']);
    }
}
