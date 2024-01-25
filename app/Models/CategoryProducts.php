<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CategoryProducts extends Model
{
    use HasFactory;

    protected $table = 'category_products';

    public static function add ($product_id, $category_id) {
        $item = new CategoryProducts;
        $item->product_id = $product_id;
        $item->category_id = $category_id;
        $item->save();

        return response()->json(['status' => true], 200);
    }

    public static function remove ($product_id, $category_id) {
        DB::table('category_products')->where('product_id', '=', $product_id)->where('category_id', '=', $category_id)->delete();

        return response()->json(['status' => true], 200);
    }
}
