<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ApiController extends Controller
{
    public function product_index(){
        $products = Product::with('category')->get(); // Menambahkan relasi dengan kategori
        return response()->json($products);
    }

    public function product_store(Request $request)
{
    // Log request data
    \Log::info('Request Data: ', $request->all());

    // Validasi data masukan
    $validatedData = $request->validate([
        'api_product' => 'required|max:255',
        'api_price' => 'required|numeric',
        'api_stock' => 'required|numeric',
        'api_category_id' => 'required|exists:categories,id', // Validasi 'api_category_id'
    ]);

    // Membuat produk baru
    $product = new Product;
    $product->product = $validatedData['api_product']; // Jika kolomnya adalah 'product'
    $product->price = $validatedData['api_price'];
    $product->stock = $validatedData['api_stock'];
    $product->category_id = $validatedData['api_category_id'];

    // Log data sebelum disimpan
    \Log::info('Product Data Before Save: ', $product->toArray());

    $product->save();

    // Log data setelah disimpan
    \Log::info('Product Data After Save: ', $product->toArray());

    // Mengembalikan response
    return response()->json([
        'responseCode' => '00',
        'responseStatus' => 'success',
        'product' => $product
    ]);

    }

    public function product_by_id($id)
    {
        $product = Product::with('category')->find($id); // Menambahkan relasi dengan kategori
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        return response()->json($product);
    }

    public function product_delete($id)
    {
        $deleted = Product::where('id', $id)->delete();
        if ($deleted) {
            return response()->json(['responseCode' => '00', 'responseStatus' => 'success delete']);
        } else {
            return response()->json(['message' => 'Product not found'], 404);
        }
    }
}
