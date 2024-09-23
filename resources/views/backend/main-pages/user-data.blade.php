@extends('layouts.backend')

@section('page-content')
    <div class="container mb-5">
        <h3>{{ $selectedUser->name }}'s Data</h3>
        <div class="fusion-tabs">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#user-cart-items" data-toggle="tab">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#user-order-history" data-toggle="tab">Payment Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#user-ordered-items" data-toggle="tab">Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#user-address" data-toggle="tab">User Address</a>
                </li>
            </ul>

            <div class="tab-content">
                <div id="user-cart-items" class="tab-pane fade show active">
                    {{-- <div class="d-flex justify-content-between align-items-center m-2">
                        <h5 class="card-title">Cart Details for {{ $selectedUser->name }}</h5>
                    </div> --}}
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead style="color: white;">
                                <tr>
                                    <th scope="col">S.No</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Regular Price</th>
                                    <th scope="col">Sale Price</th>
                                    <th scope="col">Total Price</th>
                                </tr>
                            </thead>
                            <tbody style="color: white;">
                                @foreach ($cartItems as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>
                                            <img src="{{ asset('storage/' . $item->product->product_image) }}"
                                                width="50" alt="Product Image">
                                        </td>
                                        <td>{{ $item->product->product_name }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->product->regular_price }}</td>
                                        <td>{{ $item->product->sale_price }}</td>
                                        <td>{{ $item->quantity * $item->product->sale_price }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>


                <!-- Orders Tab Content -->
                <div class="tab-pane fade" id="user-order-history">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead style="color: white;">
                                <tr>
                                    <th scope="col">S.No</th>
                                    <th scope="col">User Id</th>
                                    <th scope="col">Address Id</th>
                                    <th scope="col">Payment Method</th>
                                    <th scope="col">Order Total</th>
                                    <th scope="col">Payment Id</th>
                                    <th scope="col">Order Id</th>
                                </tr>
                            </thead>
                            <tbody style="color: white;">
                                @foreach ($orders as $order)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $order->user_id }}</td>
                                        <td>{{ $order->address_id }}</td>
                                        <td>{{ $order->payment_method }}</td>
                                        <td>{{ $order->order_total }}</td>
                                        <td>{{ $order->payment_id }}</td>
                                        <td>{{ $order->order_id }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- OrderItems Tab Content -->
                <div class="tab-pane fade" id="user-ordered-items">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead style="color: white;">
                                <tr>
                                    <th scope="col">S.No</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Regular Price</th>
                                    <th scope="col">Sale Price</th>
                                    <th scope="col">Total Price</th>
                                </tr>
                            </thead>
                            <tbody style="color: white;">
                                @foreach ($orders as $order)
                                    @foreach ($order->orderItems as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->parent->iteration }}</th>
                                            <td>
                                                <img src="{{ asset('storage/' . $item->product_image) }}" width="50"
                                                    alt="Product Image">
                                            </td>
                                            <td>{{ $item->product_name }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->quantity * $item->price }}</td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- User Saved Address Tab Content -->
                <div class="tab-pane fade" id="user-address">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead style="color: white;">
                                <tr>
                                    <th scope="col">S.No</th>
                                    <th scope="col">user Id</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Address</th>
                                    {{-- <th scope="col">City</th>
                                    <th scope="col">State</th> --}}
                                </tr>
                            </thead>
                            <tbody style="color: white;">
                                @foreach ($address as $address)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{$address->user_id}}</td>
                                        <td>{{$address->full_name}}</td>
                                        <td>{{$address->phone_number}}</td>
                                        <td>{{$address->street_address}}, {{$address->city}}, {{$address->state}}</td>
                                        {{-- <td>{{$address->street_address}}</td>
                                        <td>{{$address->city}}</td>
                                        <td>{{$address->state}}</td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>




            </div>
        </div>
    </div>
@endsection
