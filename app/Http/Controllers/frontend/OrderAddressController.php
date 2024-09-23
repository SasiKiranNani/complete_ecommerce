<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\OrderAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderAddressController extends Controller
{
    public function storeAddress(Request $request)
    {
        $orderAddress = new OrderAddress();
        $orderAddress->user_id = Auth::id();
        $orderAddress->full_name = $request->full_name;
        $orderAddress->phone_number = $request->phone_number;
        $orderAddress->street_address = $request->street_address;
        $orderAddress->city = $request->city;
        $orderAddress->state = $request->state;
        $orderAddress->save();
        return redirect()->back();
    }
}
