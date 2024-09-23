@extends('layouts.frontend')

@section('page-content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    <h2>Products</h2>
                </div>
            </div>
        </div>
        <div class="product_carousel product_column5 owl-carousel">
            @foreach ($categories as $category)
                @foreach ($category->brands as $brand)
                    @foreach ($brand->products as $product)
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{ route('product-details', ['id' => $product->id]) }}">
                                        @if ($product->product_image)
                                            <img src="{{ asset('storage/' . $product->product_image) }}" alt="Product Image"
                                                width="100">
                                        @endif
                                    </a>
                                    @if ($product->gallery_images)
                                    <a class="secondary_img" href="{{ route('product-details', ['id' => $product->id]) }}">
                                        <img src="{{ asset('storage/' . $product->gallery_images) }}" alt="">
                                    </a>
                                    @endif
                                    <div class="label_product">
                                        <span class="label_sale">sale</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist">
                                                <a href="wishlist.html" title="Add to Wishlist">
                                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#" title="compare">
                                                    <span class="ion-levels"></span>
                                                </a>
                                            </li>
                                            <li class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    title="quick view">
                                                    <span class="ion-ios-search-strong"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="javascript:void(0);" data-product-id="{{ $product->id }}"
                                            onclick="addToCart(this)" title="add to cart">Add to cart</a>
                                    </div>

                                </div>
                                <figcaption class="product_content">
                                    <div class="price_box">
                                        <span class="old_price">{{ $product->regular_price }}</span>
                                        <span class="current_price">{{ $product->sale_price }}</span>
                                    </div>
                                    <h3 class="product_name">
                                        <a
                                            href="{{ route('product-details', ['id' => $product->id]) }}">{{ $product->product_name }}</a>
                                    </h3>
                                </figcaption>
                            </figure>
                        </article>
                    @endforeach
                @endforeach
            @endforeach
        </div>


    </div>


    <script>
        function addToCart(element) {
            var productId = element.getAttribute('data-product-id');

            $.ajax({
                url: "{{ route('cart.add') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    product_id: productId
                },
                success: function(response) {
                    alert(response.success);
                    // Optionally update cart count or other UI elements here
                },
                error: function(error) {
                    alert('Failed to add product to cart!');
                }
            });
        }
    </script>
@endsection
