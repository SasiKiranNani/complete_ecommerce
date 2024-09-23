@extends('layouts.backend')

@section('page-content')
<div class="card" style="background: rgba(0,0,0,.2);">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-title">Order Details</h5>
        </div>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead style="color: white;">
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Product Image</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">User Details</th>
                        <th scope="col">Shipping Address</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody style="color: white;">
                    @foreach($order->orderItems as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>
                                <img src="{{ $item->product->image_url }}" width="50" alt="{{ $item->product->product_name }}">
                            </td>
                            <td>{{ $item->product->product_name }}</td>
                            <td>
                                @if($order->address_selection === 'billing')
                                    <strong>{{ $order->name }}</strong><br>
                                    {{ $order->address }}<br>
                                    {{ $order->email }}
                                @else
                                    <strong>{{ $order->shipping_first_name }} {{ $order->shipping_last_name }}</strong><br>
                                    {{ $order->shipping_street_address }}<br>
                                    {{ $order->shipping_city }}, {{ $order->shipping_state }}<br>
                                    {{ $order->shipping_email }}
                                @endif
                            </td>
                            <td>
                                @if($order->address_selection === 'billing')
                                    {{ $order->address }}
                                @else
                                    {{ $order->shipping_street_address }}, {{ $order->shipping_apartment }}<br>
                                    {{ $order->shipping_city }}, {{ $order->shipping_state }}
                                @endif
                            </td>
                            <td>
                                @if($order->address_selection === 'billing')
                                    {{ $order->phone_number }}
                                @else
                                    {{ $order->shipping_phone }}
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('order.details', ['orderId' => $order->id]) }}">View Order Details</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
