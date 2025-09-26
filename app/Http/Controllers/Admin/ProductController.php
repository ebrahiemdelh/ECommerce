<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\{Product, Category, Store};
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.pages.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $stores = Store::all();
        return view('admin.pages.products.create', compact('categories', 'stores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $path = $image->store('products', 'public');
                $imagePaths[] = $path;
            }
            $validated['images'] = $imagePaths;
        }
        Product::create($validated);
        Flasher::success('Product created successfully.', title: 'Product Created');
        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.pages.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $stores = Store::all();
        return view('admin.pages.products.edit', compact('product', 'categories', 'stores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        $validated = $request->validated();
        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $path = $image->store("products/{$product->id}_{$product->name}", 'public');
                $imagePaths[] = $path;
            }
            $validated['images'] = $imagePaths;
        }
        $product->update($validated);
        Flasher::success('Product updated successfully.', title: 'Product Updated');
        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        foreach ($product->images as $image) {
            Storage::disk("products/{$product->id}_{$product->name}")->delete($image);
        }
        $product->delete();
        Flasher::info('Product deleted successfully.', title: 'Product Deleted');
        return redirect()->route('admin.products.index');
    }
}
