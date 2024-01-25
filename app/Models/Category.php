<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'category';

    public static function index () {
        return response()->json(Category::all(),200);
    }

    public static function create ($name) {

        $item = new Category;
        $item->name = $name;
        $item->save();

        return response()->json($item, 200);
    }
    
    public static function modify ($id, $parent_id, $name) {
        $item = Category::findOrFail($id);

        if (!is_null($parent_id)) {
            $item->parent_id = $parent_id;
        }

        if (!is_null($name)) {
            $item->name = $name;
        }

        $item->save();

        return response()->json($item, 200);
    }

    public static function remove ($id) {
        Category::destroy($id);

        return response()->json(['status' => true], 200);
    }
}
