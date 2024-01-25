<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\CategoryProducts;

class ProductController extends Controller
{
    public function add_category (Request $request) {
        return CategoryProducts::add($request->product_id, $request->category_id);
    }

    public function remove_category (Request $request) {
        return CategoryProducts::remove($request->product_id, $request->category_id);
    }

    public function index () {
        return Product::index();
    }

    public function create (Request $request) {
        return Product::create($request->name);
    }

    public function modify (Request $request) {
        return Product::modify($request->id, $request->name);
    }

    public function remove (Request $request) {
        return Product::remove($request->id);
    }
}
