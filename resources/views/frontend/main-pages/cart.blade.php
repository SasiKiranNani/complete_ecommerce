@extends('layouts.frontend')

@section('page-content')
    <div class="shopping_cart_area mt-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if ($cartItems->isEmpty())
                        <p class="text-center">Your cart is empty.</p>
                    @else
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <form action="{{ route('cart.update') }}" method="POST">
                                    @csrf
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product_remove">Delete</th>
                                                <th class="product_thumb">Image</th>
                                                <th class="product_name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product_quantity">Quantity</th>
                                                <th class="product_total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cartItems as $cartItem)
                                                <tr id="cart-item-{{ $cartItem->id }}">
                                                    <td class="product_remove">
                                                        <button class="delete-cart-item"
                                                            data-cart-item-id="{{ $cartItem->id }}"
                                                            style="border: none; background: transparent; font-size: x-large;">
                                                            <i class="fa fa-trash-o"></i>
                                                        </button>
                                                    </td>

                                                    <td class="product_thumb">
                                                        <a href="#">
                                                            @if ($cartItem->product->product_image)
                                                                <img src="{{ asset('storage/' . $cartItem->product->product_image) }}"
                                                                    alt="Product Image" width="100">
                                                            @endif
                                                        </a>
                                                    </td>
                                                    <td class="product_name">
                                                        <a
                                                            href="{{ route('product-details', $cartItem->product->id) }}">{{ $cartItem->product->product_name }}</a>
                                                    </td>
                                                    <td class="product-price">£{{ $cartItem->price }}</td>
                                                    <td class="product_quantity">
                                                        <input min="1" max="100"
                                                            name="quantities[{{ $cartItem->id }}]"
                                                            value="{{ $cartItem->quantity }}" type="number">
                                                    </td>
                                                    <td class="product_total">£{{ $cartItem->price * $cartItem->quantity }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="cart_submit">
                                        <button type="submit">Update Cart</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="coupon_area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="coupon_code left">
                                        <h3>Coupon</h3>
                                        <div class="coupon_inner">
                                            <p>Enter your coupon code if you have one.</p>
                                            <input placeholder="Coupon code" type="text">
                                            <button type="submit">Apply coupon</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="coupon_code right">
                                        <h3>Cart Totals</h3>
                                        <div class="coupon_inner">
                                            <div class="cart_subtotal">
                                                <p>Subtotal</p>
                                                <p class="cart_amount">
                                                    £{{ $cartItems->sum(fn($item) => $item->price * $item->quantity) }}</p>
                                            </div>
                                            <div class="cart_subtotal">
                                                <p>Shipping</p>
                                                <p class="cart_amount">£5.00</p>
                                            </div>
                                            <div class="cart_subtotal">
                                                <p>Total</p>
                                                <p class="cart_amount">
                                                    £{{ $cartItems->sum(fn($item) => $item->price * $item->quantity) + 5 }}
                                                </p>
                                            </div>


                                            <div class="checkout_btn">
                                                <a href="{{ route('checkout') }}">Proceed to Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Attach event listeners to all delete buttons
            document.querySelectorAll('.delete-cart-item').forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();

                    const cartItemId = this.dataset
                        .cartItemId; // Get the cart item ID from data attribute
                    const url = `/cart/remove/${cartItemId}`; // Construct the URL for deletion

                    if (confirm('Are you sure you want to remove this item from the cart?')) {
                        // Perform the AJAX request
                        fetch(url, {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector(
                                        'meta[name="csrf-token"]').getAttribute('content')
                                }
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    // Remove the item row from the table
                                    const itemRow = document.querySelector(
                                        `#cart-item-${cartItemId}`);
                                    itemRow.remove();

                                    // Check if there are no more items in the cart
                                    if (document.querySelectorAll('.cart_page tbody tr')
                                        .length === 0) {
                                        document.querySelector('.shopping_cart_area')
                                            .innerHTML =
                                            '<p class="text-center">Your cart is empty.</p>';
                                    } else {
                                        alert('Item removed successfully!');
                                    }
                                } else {
                                    alert('Failed to remove item. Please try again.');
                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                alert('An error occurred. Please try again.');
                            });
                    }
                });
            });
        });
    </script>
@endsection
