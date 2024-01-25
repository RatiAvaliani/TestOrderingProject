<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index (Request $request) {
        return Category::index();
    }

    public function create (Request $request) {
        return Category::create($request->name);
    }

    public function modify (Request $request) {
        return Category::modify($request->id, $request->parent_id, $request->name);
    }

    public function remove (Request $request) {
        return Category::remove($request->id);
    }
}
