<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProdukController extends Controller
{
    // public function index(){
    //     $data = [
    //         'pageTitle' => 'Tentang Kami',
    //         'content' => 'Ini adalah halaman tentang kami.'
    //     ];
       
    //    return view('produk', compact('data'));
    // }

    public function index(){
        $product =Product ::get();
        return view('product.index',compact('product'));

    }
    public function create(){
        return view('product.create');

    }

    
    public function store(Request $request){
        product :: create ([
            'product'       =>$request->product,
            'price'         =>$request->price,
            'stock'         =>$request->stock,
        ]);

        return redirect ('/produk');
    }

    public function edit($id)
    {
    $product = Product::find($id);
    return view('product.edit', compact('product'));
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect('/produk')->with('error', 'Produk tidak ditemukan');
        }

        $product->delete();

        return redirect('/produk')->with('success', 'Produk berhasil dihapus');
    }

    public function update(Request $request, $id)
    {
    $product = Product::find($id);
    $product->update([
        'product' => $request->product,
        'price'   => $request->price,
        'stock'   => $request->stock,
    ]);

    return redirect('/produk');
    }
}
