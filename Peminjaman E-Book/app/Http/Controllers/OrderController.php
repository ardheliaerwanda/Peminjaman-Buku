<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $currentDate = date('Y-m-d');
        $userId = Auth::id();

        foreach ($request->ebook_id as $ebookId) {
            Order::create([
                'account_id' => $userId,
                'ebook_id' => $ebookId,
                'order_date' => $currentDate
            ]);
        }

        Session::forget('cart');
        return redirect('/success/{lang}')->with('success', 'Order submitted');
    }

    public function show(Order $order)
    {
        //
    }

    public function edit(Order $order)
    {
        //
    }

    public function update(Request $request, Order $order)
    {
        //
    }


    public function destroy(Order $order)
    {
        //
    }
}
