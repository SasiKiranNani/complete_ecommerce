@extends('layouts.frontend')

@section('page-content')
    <div class="Checkout_section mt-60">
        <div class="container">
            <div class="checkout_form">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <form action="{{ route('storeAddress') }}" method="POST">
                            @csrf
                            <h3>Add New Address</h3>
                            <div class="row">

                                <div class="col-lg-6 mb-20">
                                    <label>Full Name <span>*</span></label>
                                    <input type="text" name="full_name">
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <label>Phone<span>*</span></label>
                                    <input type="text" name='phone_number' maxlength="10">
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <label>Street address <span>*</span></label>
                                    <input type="text" name="street_address">
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <label>City <span>*</span></label>
                                    <input type="text" name="city">
                                </div>
                                <div class="col-12 mb-20">
                                    <label>State<span>*</span></label>
                                    <input type="text" name="state">
                                </div>
                            </div>
                            <div class="order_button">
                                <button type="submit">Save Address</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <form action="{{route('make-payment')}}">
                            <div class="panel-default">
                                <h3>Billing Details</h3>
                                @foreach ($orderAddress as $address)
                                    <input type="radio" name="address_id" id="address" value="{{ $address->id }}">
                                    <label for="address">{{ $address->full_name }}
                                        <span>{{ $address->phone_number }}</span>
                                        <p>{{ $address->street_address }}, {{ $address->city }}, {{ $address->state }}</p>
                                    </label>
                                @endforeach
                            </div>
                            <h3 class="mt-5">Your order</h3>
                            <div class="order_table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cartItems as $cartItem)
                                            <tr>
                                                <td>{{ $cartItem->product->product_name }} <strong> ×
                                                        {{ $cartItem->quantity }}</strong></td>
                                                <td>£{{ number_format($cartItem->price * $cartItem->quantity, 2) }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Cart Subtotal</th>
                                            <td>£{{ number_format($cartItems->sum(fn($item) => $item->price * $item->quantity), 2) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Shipping</th>
                                            <td><strong>£5.00</strong></td>
                                        </tr>
                                        <tr class="order_total">
                                            <th>Order Total</th>
                                            <input type="hidden" name="order_total" value="{{ $cartItems->sum(fn($item) => $item->price * $item->quantity) + 5 }}">

                                            <td><strong>£{{ number_format($cartItems->sum(fn($item) => $item->price * $item->quantity) + 5, 2) }}</strong></td>
                                        </tr>
                                        
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment_method">
                                <div class="panel-default">
                                    <input id="payment_cod" name="payment_method" type="radio" value="cod" required />
                                    <label for="payment_cod">COD (Cash on Delivery)</label>
                                </div>
                                <div class="panel-default">
                                    <input id="payment_razorpay" name="payment_method" type="radio" value="razorpay" required />
                                    <label for="payment_razorpay">Razorpay</label>
                                </div>
                                <div class="order_button">
                                    <button type="submit">Place Order</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
