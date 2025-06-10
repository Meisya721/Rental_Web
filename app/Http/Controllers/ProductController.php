<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductStoreRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::orderBy('created_at', 'ASC')->get();

        return view('products.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductStoreRequest $request)
    {
        if ($request->validated()) {
            // ✅ Perubahan mulai di sini: simpan gambar ke public/asset/img
            $filename = time() . '.' . $request->file('gambar')->getClientOriginalExtension();
            $request->file('gambar')->move(public_path('asset/img'), $filename);
            Product::create($request->except('gambar') + ['gambar' => $filename]);
            // $gambar = $request->file('gambar')->store('asset/product', 'public');
            // Product::create($request->except('gambar') + ['gambar' => $gambar]);
        }

        return redirect()->route('admin/products')->with('success', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);

        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);

        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        // ✅ Tambahkan logika jika gambar diupdate
        if ($request->hasFile('gambar')) {
            $filename = time() . '.' . $request->file('gambar')->getClientOriginalExtension();
            $request->file('gambar')->move(public_path('asset/img'), $filename);
            Product::create($request->except('gambar') + ['gambar' => $filename]);
        }

        $product->update($request->except('gambar'));

        // $product->update($request->all());

        return redirect()->route('admin/products')->with('success', 'product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('admin/products')->with('success', 'product deleted successfully');
    }
}
