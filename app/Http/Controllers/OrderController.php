<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
  public function store(Request $request)
  {
    $validator = Validator::make($request->all(), [
        'user_id' => 'required|exists:users,id',
    ]);

    if ($validator->fails()) {
        return response()->json(['errors' => $validator->errors()], 422);
    }

    $order = Order::create($request->all());
    return response()->json(['order' => $order], 201);
  }


  public function cancel($orderId)
  {
    $order = Order::find($orderId);

    if (!$order) {
        return response()->json(['error' => 'Order not found'], 404);
    }
    $order->update(['status' => 'cancelled']);
    return response()->json(['message' => 'Order cancelled successfully'], 200);
  }

  public function index(Request $request)
  {
    $orders = Order::orderBy('created_at', 'desc')->paginate($request->input('limit', 10));
    return response()->json(['orders' => $orders], 200);
  }
}
