<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use app\Models\Order;

class OrderController extends Controller
{
    public function viewForm(Request $request){
        try {
        $order = new Order();
        $order->name = $request->name ; 
        $order->phone = $request->phone; 
        $order->address = $request->address;
            $order->save();
            return response()->json([
                "message"=> "order created succesfully",
                "order" => $order
            ], 201);
        } catch (\Throwable $th) {
           Log::error("ordre creation failed" . $th->getMessage());
           return response()->json(["message"=> "failed to create order"], 500);
        }
        

    }
}
