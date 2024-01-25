<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index ($user_id) {
        return Order::index($user_id);
    }

    public function remove ($id) {
        return Order::remove($id);
    }
}
