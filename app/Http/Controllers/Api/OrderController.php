<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Get all orders
    public function index()
    {
        return response()->json(Order::all(), 200);
    }

    // Store a new order
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'number' => 'required|string|max:15',
            'description' => 'required|string',
            'option' => 'required|string',
            'payment_proof' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('payment_proof')) {
            $validated['payment_proof'] = $request->file('payment_proof')->store('payment_proofs', 'public');
        }

        $order = Order::create($validated);
        return response()->json($order, 201);
    }

    // Get a specific order
    public function show($id)
    {
        $order = Order::find($id);
        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }
        return response()->json($order, 200);
    }

    // Update an existing order
//     public function update(Request $request, $id)
// {
//     $order = Order::find($id);
//     if (!$order) {
//         return response()->json(['message' => 'Order not found'], 404);
//     }

//     $validated = $request->validate([
//         'name' => 'required|string|max:255',
//         'email' => 'required|email',
//         'number' => 'required|string|max:15',
//         'description' => 'required|string',
//         'option' => 'required|string',
//         'payment_proof' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
//     ]);

//     if ($request->hasFile('payment_proof')) {
//         $validated['payment_proof'] = $request->file('payment_proof')->store('payment_proofs', 'public');
//     }

//     $order->update($request->all());

//     return response()->json([
//         'message' => 'Order berhasil diupdate',
//     ], 200);
// }

public function update(Request $request, $id)
{
    $order = Order::find($id);

    if (!$order) {
        return response()->json(['message' => 'Order not found'], 404);
    }

    // Validate the incoming data
    $validated = $request->validate([
        'name' => 'sometimes|required|string|max:255',
        'email' => 'sometimes|required|email|unique:users,email,' . $id . '|max:255',
        'number' => 'sometimes|required|string|max:15',
        'description' => 'sometimes|required|string|max:255',
        'option' => 'sometimes|required|string|max:255',
        'payment_proof' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
    ]);

    // Handle file upload if provided
    if ($request->hasFile('payment_proof')) {
        // Delete the old payment proof if exists
        if ($order->payment_proof) {
            Storage::disk('public')->delete($order->payment_proof);
        }

        // Store the new payment proof
        $validated['payment_proof'] = $request->file('payment_proof')->store('payment_proofs', 'public');
    }

    // Update the order with the validated data
    $order->update($validated);

    return response()->json([
        'message' => 'Order successfully updated', $order
    ], 200);
}



    // Delete an order
    public function destroy($id)
    {
        $order = Order::find($id);
        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        $order->delete();
        return response()->json(['message' => 'Order deleted'], 200);
    }
}
