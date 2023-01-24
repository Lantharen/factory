<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        return view('page.products',[
            'products' => Product::paginate(),
        ]);
    }

    public function show(int $id)
    {
        return view('page.show', [
            'product' => Product::findOrFail($id)
        ]);
    }
}
