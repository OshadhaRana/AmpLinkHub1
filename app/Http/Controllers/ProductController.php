<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Fetch all products
        $products = Product::all();

        // Return view with products
        return view('product', compact('products'));
    }

    public function index1()
    {
        // Fetch all products
        $products = Product::all();

        // Return view with products
        return view('products.index', compact('products'));
    }

    // Show the form to create a product
    public function create()
    {
        return view('products.create');
    }

    // Store a new product
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'category' => 'required|string',
            'price' => 'required|numeric',
            'old_price' => 'nullable|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_best_seller' => 'boolean',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('Images', 'public');
        }

        // Store the product
        Product::create([
            'product_name' => $request->product_name,
            'category' => $request->category,
            'price' => $request->price,
            'old_price' => $request->old_price,
            'image_path' => $imagePath,
            'is_best_seller' => $request->is_best_seller ?? false,
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    // Show the form to edit a product
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // Update a product
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'category' => 'required|string',
            'price' => 'required|numeric',
            'old_price' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_best_seller' => 'boolean',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete the old image
            if ($product->image_path && Storage::exists('public/' . $product->image_path)) {
                Storage::delete('public/' . $product->image_path);
            }

            // Upload the new image
            $imagePath = $request->file('image')->store('Images', 'public');
            $product->image_path = $imagePath;
        }

        // Update the product
        $product->update([
            'product_name' => $request->product_name,
            'category' => $request->category,
            'price' => $request->price,
            'old_price' => $request->old_price,
            'is_best_seller' => $request->is_best_seller ?? false,
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    // Delete a product
    public function destroy(Product $product)
    {
        // Delete the product image
        if ($product->image_path && Storage::exists('public/' . $product->image_path)) {
            Storage::delete('public/' . $product->image_path);
        }

        // Delete the product
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}
