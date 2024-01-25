<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Cart extends Model
{
    use HasFactory;

    public static function index () {
        return response()->json(session('cart'),200);
    }

    public static function add_quantity ($id) {
        $list = Session::get('cart');

        $list[$id] = $list[$id] + 1;

        Session::put('cart', $list);

        return response()->json(true, 200);
    }

    public static function subtract_quantity ($id) {
        $list = Session::get('cart');

        if (array_key_exists($id, $list) && (intval($list[$id]) - 1) < 1) {
            $list[$id] = $list[$id]-1;

            return response()->json(['status' => true] , 200);
        }

        return response()->json(['status' => false] , 200);
    }

    public static function create ($id) {

        $list = Session::get('cart');
        $list[$id] = 1;

        Session::put('cart', $list);

        return response()->json(Session::get('cart'), 200);
    }

    public static function remove ($id) {
        $list = Session::get('cart');

        if (array_key_exists($id, $list)) {
            unset($list[$id]);
        }

        Session::put('cart', $list);

        return response()->json(Session::get('cart'), 200);
    }
}
