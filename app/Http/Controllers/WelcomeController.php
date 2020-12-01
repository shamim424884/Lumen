<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Merchant\Database\Order;

class WelcomeController extends Controller {
    
    public function index() { 
        $orders = Order::orderby('id','ASC')->get();
        return view('index', compact('orders'));
    }
}
