<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Merchant\Database\Order;
use Illuminate\Http\Request;

class OrderController extends Controller {
    
    public function showAllOrders() {
        return response()->json(Order::all());
    }
    
    public function showOneOrder($id) {
        return response()->json(Order::find($id));
    }
    
    public function create(Request $request) {
        $this->validate($request, [
            'OrderID' => 'required',
            'StyleNo' => 'required|max: 20',
            'OrderNo' => 'required|max: 20',            
            'ItemDescription' => 'required|max: 50',
            'OrderDate' => 'required|date',
            'UnitPrice' => 'required|numeric',
        ]);
        $author = Order::create($request->all());
        return response()->json($author, 201);
    }

    public function update($id, Request $request){
        $author = Order::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id) {
        Order::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }


}
