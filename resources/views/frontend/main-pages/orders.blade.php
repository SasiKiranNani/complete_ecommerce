@extends('layouts.frontend')

@section('page-content')
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>My Orders</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Image</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Order Total</th>
                    <th scope="col">Payment Method</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        @php
                            $orderTotal = 0;
                        @endphp
                        <td>{{ $loop->iteration }}</td>
                        <td style="width: 15%">
                            @foreach ($order->orderItems as $orderItem)
                                <img src="/images/{{ $orderItem->item_image }}" alt="" class="w-50">
                            @endforeach
                        </td>
                        <td>
                            @foreach ($order->orderItems as $orderItem)
                                <p class="mt-4">{{ $orderItem->item_name }}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($order->orderItems as $orderItem)
                                <p class="mt-4">{{ $orderItem->quantity }} N</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($order->orderItems as $orderItem)
                                <p class="mt-4">Rs. {{ $orderItem->price }}</p>
                                @php
                                    $quantity = $orderItem->quantity;
                                    $price = $orderItem->price;
                                    $total = $quantity * $price;
                                    $orderTotal += $total;
                                @endphp
                            @endforeach
                        </td>
                        <td class="pt-4">Rs. {{ $orderTotal }}</td>
                        <td class="pt-4">{{ $order->payment_method }}</td>
                        <td>
                            <a href="" class="btn btn-primary">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
