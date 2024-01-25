<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    public static function index () {
        return response()->json(Product::all(),200);
    }

    public static function create ($name) {

        $item = new Product;
        $item->name = $name;
        $item->save();

        return response()->json($item, 200);
    }

    public static function modify ($id, $name) {
        $item = Product::findOrFail($id);

        $item->name = $name;

        $item->save();

        return response()->json($item, 200);
    }

    public static function remove ($id) {
        Product::destroy($id);

        return response()->json(['status' => true], 200);
    }
}
