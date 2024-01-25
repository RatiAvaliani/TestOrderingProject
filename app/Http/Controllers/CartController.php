<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function __construct (Request $request) {
        $value = $request->session()->get('cart');


        if (is_null($value)) {
            $request->session()->put('cart', []);
        }
    }

    public function index (Request $request) {
        return response()->json($request->session()->get('cart'),200);
    }

    public function create (Request $request) {

        $list = $request->session()->get('cart');
        $list[$request->product_id] = 1;

        $request->session()->put('cart', $list);

        return response()->json($request->session()->get('cart'), 200);
    }

    public function add_quantity (Request $request) {

        $list = $request->session()->get('cart');;

        $list[$request->product_id] = $list[$request->product_id] + 1;
        $request->session()->put('cart', $list);

        return response()->json(true, 200);
    }

    public function subtract_quantity (Request $request) {
        $list = $request->session()->get('cart');

        if (array_key_exists($request->product_id, $list) && (intval($list[$request->product_id]) - 1) >= 1) {
            $list[$request->product_id] = $list[$request->product_id]-1;

            $request->session()->put('cart', $list);
            return response()->json(['status' => true] , 200);
        }

        return response()->json(['status' => false] , 200);
    }

    public function remove (Request $request) {
        $list = $request->session()->get('cart');

        if (array_key_exists($request->product_id, $list)) {
            unset($list[$request->product_id]);
        }

        $request->session()->put('cart', $list);

        return response()->json($request->session()->get('cart'), 200);
    }

    public function order (Request $request) {
        return Order::create($request->session()->get('cart'));
    }
}
