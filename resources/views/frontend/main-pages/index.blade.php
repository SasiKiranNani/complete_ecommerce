@extends('layouts.frontend')

@section('page-content')
    <section class="slider_section mb-70">
        <div class="slider_area owl-carousel">
            <div class="single_slider d-flex align-items-center" data-bgimg="frontend/img/slider/slider1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content">
                                <h1> best skin</h1>
                                <h2>qled 75 inch q7f</h2>
                                <p>exclusive offer <span> 20% off </span> this week</p>
                                <a class="button" href="shop.html">shopping now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="frontend/img/slider/slider2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content">
                                <h1>Dual Front</h1>
                                <h2>camera 20mp</h2>
                                <p>exclusive offer <span> 20% off </span> this week</p>
                                <a class="button" href="shop.html">shopping now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="frontend/img/slider/slider3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content">
                                <h1>Hurry Up!</h1>
                                <h2>IN THE WORD 2022</h2>
                                <p>exclusive offer <span> 20% off </span> this week</p>
                                <a class="button" href="shop.html">shopping now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="shipping_area mb-70">
        <div class="container">
            <div class=" row">
                <div class="col-lg-3 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src="frontend/img/about/shipping1.png" alt="">
                        </div>
                        <div class="shipping_content">
                            <h2>Free Shipping</h2>
                            <p>Free shipping on all US order</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src="frontend/img/about/shipping2.png" alt="">
                        </div>
                        <div class="shipping_content">
                            <h2>Support 24/7</h2>
                            <p>Contact us 24 hours a day</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src="frontend/img/about/shipping3.png" alt="">
                        </div>
                        <div class="shipping_content">
                            <h2>100% Money Back</h2>
                            <p>You have 30 days to Return</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src="frontend/img/about/shipping4.png" alt="">
                        </div>
                        <div class="shipping_content">
                            <h2>Payment Secure</h2>
                            <p>We ensure secure payment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="banner_area mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="frontend/img/bg/banner1.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="frontend/img/bg/banner2.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="frontend/img/bg/banner3.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="product_area mb-46">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Hot Deals Products</h2>
                    </div>
                </div>
            </div>
            <div class="product_carousel product_column5 owl-carousel">
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-countdown.html"><img
                                    src="frontend/img/product/product1.jpg" alt=""></a>
                            <a class="secondary_img" href="product-countdown.html"><img
                                    src="frontend/img/product/product2.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="compare"><a href="#" title="compare"><span
                                                class="ion-levels"></span></a>
                                    </li>
                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                            data-bs-target="#modal_box" title="quick view"> <span
                                                class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.html" title="add to cart">Add to cart</a>
                            </div>
                            <div class="product_timing">
                                <div data-countdown="2023/12/15"></div>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-countdown.html">Natus erro at congue massa
                                    commodo
                                    sit</a></h3>
                        </figcaption>
                    </figure>
                </article>
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-countdown.html"><img
                                    src="frontend/img/product/product3.jpg" alt=""></a>
                            <a class="secondary_img" href="product-countdown.html"><img
                                    src="frontend/img/product/product4.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="compare"><a href="#" title="compare"><span
                                                class="ion-levels"></span></a>
                                    </li>
                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                            data-bs-target="#modal_box" title="quick view"> <span
                                                class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.html" title="add to cart">Add to cart</a>
                            </div>
                            <div class="product_timing">
                                <div data-countdown="2023/12/15"></div>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-countdown.html">Itaque earum velit elementum</a>
                            </h3>
                        </figcaption>
                    </figure>
                </article>
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-countdown.html"><img
                                    src="frontend/img/product/product5.jpg" alt=""></a>
                            <a class="secondary_img" href="product-countdown.html"><img
                                    src="frontend/img/product/product6.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="compare"><a href="#" title="compare"><span
                                                class="ion-levels"></span></a>
                                    </li>
                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                            data-bs-target="#modal_box" title="quick view"> <span
                                                class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.html" title="add to cart">Add to cart</a>
                            </div>
                            <div class="product_timing">
                                <div data-countdown="2023/12/15"></div>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-countdown.html">Mauris tincidunt eros posuere
                                    placerat</a></h3>
                        </figcaption>
                    </figure>
                </article>
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-countdown.html"><img
                                    src="frontend/img/product/product7.jpg" alt=""></a>
                            <a class="secondary_img" href="product-countdown.html"><img
                                    src="frontend/img/product/product8.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="compare"><a href="#" title="compare"><span
                                                class="ion-levels"></span></a>
                                    </li>
                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                            data-bs-target="#modal_box" title="quick view"> <span
                                                class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.html" title="add to cart">Add to cart</a>
                            </div>
                            <div class="product_timing">
                                <div data-countdown="2023/12/15"></div>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-countdown.html">Morbi ornare vestibulum
                                    massa</a>
                            </h3>
                        </figcaption>
                    </figure>
                </article>
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-countdown.html"><img
                                    src="frontend/img/product/product9.jpg" alt=""></a>
                            <a class="secondary_img" href="product-countdown.html"><img
                                    src="frontend/img/product/product10.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="compare"><a href="#" title="compare"><span
                                                class="ion-levels"></span></a>
                                    </li>
                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                            data-bs-target="#modal_box" title="quick view"> <span
                                                class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.html" title="add to cart">Add to cart</a>
                            </div>
                            <div class="product_timing">
                                <div data-countdown="2023/12/15"></div>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-countdown.html">Porro quisquam eget feugiat
                                    pretium</a></h3>
                        </figcaption>
                    </figure>
                </article>
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-countdown.html"><img
                                    src="frontend/img/product/product11.jpg" alt=""></a>
                            <a class="secondary_img" href="product-countdown.html"><img
                                    src="frontend/img/product/product12.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="compare"><a href="#" title="compare"><span
                                                class="ion-levels"></span></a>
                                    </li>
                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                            data-bs-target="#modal_box" title="quick view"> <span
                                                class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.html" title="add to cart">Add to cart</a>
                            </div>
                            <div class="product_timing">
                                <div data-countdown="2023/12/15"></div>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-countdown.html">Laudantium enim fringilla
                                    dignissim ipsum primis</a></h3>
                        </figcaption>
                    </figure>
                </article>
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-countdown.html"><img
                                    src="frontend/img/product/product4.jpg" alt=""></a>
                            <a class="secondary_img" href="product-countdown.html"><img
                                    src="frontend/img/product/product5.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="compare"><a href="#" title="compare"><span
                                                class="ion-levels"></span></a>
                                    </li>
                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                            data-bs-target="#modal_box" title="quick view"> <span
                                                class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.html" title="add to cart">Add to cart</a>
                            </div>
                            <div class="product_timing">
                                <div data-countdown="2023/12/15"></div>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-countdown.html">Natus erro at congue massa
                                    commodo
                                    sit</a></h3>
                        </figcaption>
                    </figure>
                </article>
            </div>
        </div>
    </section>
    <div class="banner_area mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="frontend/img/bg/banner4.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="frontend/img/bg/banner5.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="top_category_product mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3">
                    <div class="top_category_header">
                        <h3>Top Categories This Week</h3>
                        <p>Aliquam eget consectetuer habitasse interdum.</p>
                        <a href="shop.html">Show All Categories</a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-9">
                    <div class="top_category_container category_column5 owl-carousel">
                        <div class="col-lg-2">
                            <article class="single_category">
                                <figure>
                                    <div class="category_thumb">
                                        <a href="shop.html"><img src="frontend/img/s-product/category1.jpg"
                                                alt=""></a>
                                    </div>
                                    <figcaption class="category_name">
                                        <h3><a href="shop.html">Games & Consoles </a></h3>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-2">
                            <article class="single_category">
                                <figure>
                                    <div class="category_thumb">
                                        <a href="shop.html"><img src="frontend/img/s-product/category2.jpg"
                                                alt=""></a>
                                    </div>
                                    <figcaption class="category_name">
                                        <h3><a href="shop.html">Home Accessories</a></h3>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-2">
                            <article class="single_category">
                                <figure>
                                    <div class="category_thumb">
                                        <a href="shop.html"><img src="frontend/img/s-product/category3.jpg"
                                                alt=""></a>
                                    </div>
                                    <figcaption class="category_name">
                                        <h3><a href="shop.html">TV & Audio</a></h3>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-2">
                            <article class="single_category">
                                <figure>
                                    <div class="category_thumb">
                                        <a href="shop.html"><img src="frontend/img/s-product/category4.jpg"
                                                alt=""></a>
                                    </div>
                                    <figcaption class="category_name">
                                        <h3><a href="shop.html">Games & Consoles </a></h3>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-2">
                            <article class="single_category">
                                <figure>
                                    <div class="category_thumb">
                                        <a href="shop.html"><img src="frontend/img/s-product/category5.jpg"
                                                alt=""></a>
                                    </div>
                                    <figcaption class="category_name">
                                        <h3><a href="shop.html">Laptop & Tablets </a></h3>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-2">
                            <article class="single_category">
                                <figure>
                                    <div class="category_thumb">
                                        <a href="shop.html"><img src="frontend/img/s-product/category2.jpg"
                                                alt=""></a>
                                    </div>
                                    <figcaption class="category_name">
                                        <h3><a href="shop.html">Home Accessories</a></h3>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="featured_product_area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Featured Products</h2>
                    </div>
                </div>
            </div>
            <div class="row featured_container featured_column3">
                <div class="col-lg-4">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="frontend/img/product/product13.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="frontend/img/product/product14.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">sale</span>
                                </div>
                            </div>
                            <figcaption class="product_content">
                                <div class="price_box">
                                    <span class="current_price">$79.00</span>
                                </div>
                                <h3 class="product_name"><a href="product-details.html">Pellentesque posuere hendrerit
                                        dui</a></h3>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart">Add to cart</a>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-4">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="frontend/img/product/product15.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="frontend/img/product/product16.jpg" alt=""></a>
                            </div>
                            <figcaption class="product_content">
                                <div class="price_box">
                                    <span class="old_price">$86.00</span>
                                    <span class="current_price">$79.00</span>
                                </div>
                                <h3 class="product_name"><a href="product-details.html">Auctor gravida enim
                                        pellentesque
                                        quam</a></h3>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart">Add to cart</a>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-4">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="frontend/img/product/product17.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="frontend/img/product/product18.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">sale</span>
                                </div>
                            </div>
                            <figcaption class="product_content">
                                <div class="price_box">
                                    <span class="old_price">$86.00</span>
                                    <span class="current_price">$79.00</span>
                                </div>
                                <h3 class="product_name"><a href="product-details.html">Kaoreet lobortis sagittis
                                        pellentesque</a></h3>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart">Add to cart</a>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-4">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="frontend/img/product/product19.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="frontend/img/product/product20.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">sale</span>
                                </div>
                            </div>
                            <figcaption class="product_content">
                                <div class="price_box">
                                    <span class="old_price">$86.00</span>
                                    <span class="current_price">$79.00</span>
                                </div>
                                <h3 class="product_name"><a href="product-details.html">Cras neque honcus consectetur
                                        magna</a></h3>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart">Add to cart</a>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-4">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="frontend/img/product/product21.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="frontend/img/product/product22.jpg" alt=""></a>
                            </div>
                            <figcaption class="product_content">
                                <div class="price_box">
                                    <span class="current_price">$79.00</span>
                                </div>
                                <h3 class="product_name"><a href="product-details.html">Duis pulvinar obortis eleifend
                                        elementum</a></h3>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart">Add to cart</a>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-4">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="frontend/img/product/product23.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="frontend/img/product/product24.jpg" alt=""></a>
                            </div>
                            <figcaption class="product_content">
                                <div class="price_box">
                                    <span class="old_price">$86.00</span>
                                    <span class="current_price">$79.00</span>
                                </div>
                                <h3 class="product_name"><a href="product-details.html">Fusce ultricies dolor vitae
                                        tristique suscipit</a></h3>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart">Add to cart</a>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-4">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="frontend/img/product/product15.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="frontend/img/product/product16.jpg" alt=""></a>
                            </div>
                            <figcaption class="product_content">
                                <div class="price_box">
                                    <span class="old_price">$86.00</span>
                                    <span class="current_price">$79.00</span>
                                </div>
                                <h3 class="product_name"><a href="product-details.html">Natus erro at congue massa
                                        commodo sit</a></h3>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart">Add to cart</a>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-4">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="frontend/img/product/product17.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="frontend/img/product/product18.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">sale</span>
                                </div>
                            </div>
                            <figcaption class="product_content">
                                <div class="price_box">
                                    <span class="old_price">$86.00</span>
                                    <span class="current_price">$79.00</span>
                                </div>
                                <h3 class="product_name"><a href="product-details.html">Cras neque honcus consectetur
                                        magna</a></h3>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart">Add to cart</a>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="product_area mb-46">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Computer & Laptop</h2>
                    </div>
                </div>
            </div>
            <div class="product_carousel product_column5 owl-carousel">
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="frontend/img/product/product1.jpg" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="frontend/img/product/product2.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="compare"><a href="#" title="compare"><span
                                                class="ion-levels"></span></a>
                                    </li>
                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                            data-bs-target="#modal_box" title="quick view"> <span
                                                class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.html" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.html">Natus erro at congue massa commodo
                                    sit</a></h3>
                        </figcaption>
                    </figure>
                </article>
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="frontend/img/product/product3.jpg" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="frontend/img/product/product4.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="compare"><a href="#" title="compare"><span
                                                class="ion-levels"></span></a>
                                    </li>
                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                            data-bs-target="#modal_box" title="quick view"> <span
                                                class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.html" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.html">Itaque earum velit elementum</a>
                            </h3>
                        </figcaption>
                    </figure>
                </article>
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="frontend/img/product/product5.jpg" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="frontend/img/product/product6.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="compare"><a href="#" title="compare"><span
                                                class="ion-levels"></span></a>
                                    </li>
                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                            data-bs-target="#modal_box" title="quick view"> <span
                                                class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.html" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.html">Mauris tincidunt eros posuere
                                    placerat</a></h3>
                        </figcaption>
                    </figure>
                </article>
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="frontend/img/product/product7.jpg" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="frontend/img/product/product8.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="compare"><a href="#" title="compare"><span
                                                class="ion-levels"></span></a>
                                    </li>
                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                            data-bs-target="#modal_box" title="quick view"> <span
                                                class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.html" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.html">Morbi ornare vestibulum massa</a>
                            </h3>
                        </figcaption>
                    </figure>
                </article>
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="frontend/img/product/product9.jpg" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="frontend/img/product/product10.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="compare"><a href="#" title="compare"><span
                                                class="ion-levels"></span></a>
                                    </li>
                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                            data-bs-target="#modal_box" title="quick view"> <span
                                                class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.html" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.html">Porro quisquam eget feugiat
                                    pretium</a></h3>
                        </figcaption>
                    </figure>
                </article>
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="frontend/img/product/product11.jpg" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="frontend/img/product/product12.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="compare"><a href="#" title="compare"><span
                                                class="ion-levels"></span></a>
                                    </li>
                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                            data-bs-target="#modal_box" title="quick view"> <span
                                                class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.html" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.html">Laudantium enim fringilla
                                    dignissim
                                    ipsum primis</a></h3>
                        </figcaption>
                    </figure>
                </article>
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="frontend/img/product/product4.jpg" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="frontend/img/product/product5.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="compare"><a href="#" title="compare"><span
                                                class="ion-levels"></span></a>
                                    </li>
                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                            data-bs-target="#modal_box" title="quick view"> <span
                                                class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.html" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.html">Natus erro at congue massa commodo
                                    sit</a></h3>
                        </figcaption>
                    </figure>
                </article>
            </div>
        </div>
    </section>
    <div class="banner_area mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9">
                    <div class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="frontend/img/bg/banner6.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="frontend/img/bg/banner7.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="product_area mb-46">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="product_left_area">
                        <div class="section_title">
                            <h2>Smartphone & Tablets</h2>
                        </div>
                        <div class="product_carousel product_column4 owl-carousel">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="frontend/img/product/product1.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="frontend/img/product/product2.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                            class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="compare"><a href="#" title="compare"><span
                                                            class="ion-levels"></span></a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modal_box" title="quick view"> <span
                                                            class="ion-ios-search-strong"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Natus erro at congue
                                                massa commodo sit</a></h3>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="frontend/img/product/product3.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="frontend/img/product/product4.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                            class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="compare"><a href="#" title="compare"><span
                                                            class="ion-levels"></span></a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modal_box" title="quick view"> <span
                                                            class="ion-ios-search-strong"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Itaque earum velit
                                                elementum</a></h3>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="frontend/img/product/product5.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="frontend/img/product/product6.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                            class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="compare"><a href="#" title="compare"><span
                                                            class="ion-levels"></span></a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modal_box" title="quick view"> <span
                                                            class="ion-ios-search-strong"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Mauris tincidunt eros
                                                posuere placerat</a></h3>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="frontend/img/product/product7.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="frontend/img/product/product8.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html"
                                                        title="Add to Wishlist"><i class="fa fa-heart-o"
                                                            aria-hidden="true"></i></a></li>
                                                <li class="compare"><a href="#" title="compare"><span
                                                            class="ion-levels"></span></a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modal_box" title="quick view"> <span
                                                            class="ion-ios-search-strong"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Morbi ornare
                                                vestibulum
                                                massa</a></h3>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="frontend/img/product/product9.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="frontend/img/product/product10.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html"
                                                        title="Add to Wishlist"><i class="fa fa-heart-o"
                                                            aria-hidden="true"></i></a></li>
                                                <li class="compare"><a href="#" title="compare"><span
                                                            class="ion-levels"></span></a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modal_box" title="quick view"> <span
                                                            class="ion-ios-search-strong"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Porro quisquam eget
                                                feugiat pretium</a></h3>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="frontend/img/product/product11.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="frontend/img/product/product12.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html"
                                                        title="Add to Wishlist"><i class="fa fa-heart-o"
                                                            aria-hidden="true"></i></a></li>
                                                <li class="compare"><a href="#" title="compare"><span
                                                            class="ion-levels"></span></a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modal_box" title="quick view"> <span
                                                            class="ion-ios-search-strong"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Laudantium enim
                                                fringilla dignissim ipsum primis</a></h3>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="frontend/img/product/product4.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="frontend/img/product/product5.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html"
                                                        title="Add to Wishlist"><i class="fa fa-heart-o"
                                                            aria-hidden="true"></i></a></li>
                                                <li class="compare"><a href="#" title="compare"><span
                                                            class="ion-levels"></span></a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modal_box" title="quick view"> <span
                                                            class="ion-ios-search-strong"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Natus erro at congue
                                                massa commodo sit</a></h3>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="testimonial_are">
                        <div class="section_title">
                            <h2>Testimonials</h2>
                        </div>
                        <div class="testimonial_active owl-carousel">
                            <article class="single_testimonial">
                                <figure>
                                    <div class="testimonial_thumb">
                                        <a href="#"><img src="frontend/img/about/testimonial1.jpg"
                                                alt=""></a>
                                    </div>
                                    <figcaption class="testimonial_content">
                                        <p>Support and response has been amazing, helping me with several issues I came
                                            across and got them solved almost the same day. A pleasure to work with
                                            them!</p>
                                        <h3><a href="#">Kathy Young</a><span> - CEO of SunPark</span></h3>
                                    </figcaption>

                                </figure>
                            </article>
                            <article class="single_testimonial">
                                <figure>
                                    <div class="testimonial_thumb">
                                        <a href="#"><img src="frontend/img/about/testimonial2.jpg"
                                                alt=""></a>
                                    </div>
                                    <figcaption class="testimonial_content">
                                        <p>Perfect Themes and the best of all that you have many options to choose! Best
                                            Support team ever! Thank you very much!</p>
                                        <h3><a href="#">John Sullivan</a><span> - Customer</span></h3>
                                    </figcaption>

                                </figure>
                            </article>
                            <article class="single_testimonial">
                                <figure>
                                    <div class="testimonial_thumb">
                                        <a href="#"><img src="frontend/img/about/testimonial3.jpg"
                                                alt=""></a>
                                    </div>
                                    <figcaption class="testimonial_content">
                                        <p>Code, template and others are very good. The support has served me
                                            immediately and solved my problems when I need help. Are to be
                                            congratulated.</p>
                                        <h3><a href="#">Jenifer Brown</a><span> - Manager of AZ</span></h3>
                                    </figcaption>

                                </figure>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog_section mb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>From the Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog_carousel blog_column4 owl-carousel">
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="frontend/img/blog/blog1.jpg"
                                            alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                    <p class="post_author">By <a href="#">admin</a> July 04, 2022</p>
                                    <h3 class="post_title"><a href="blog-details.html">Blog image post</a></h3>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="frontend/img/blog/blog2.jpg"
                                            alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                    <p class="post_author">By <a href="#">admin</a> July 04, 2022</p>
                                    <h3 class="post_title"><a href="blog-details.html">Post with Gallery</a></h3>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="frontend/img/blog/blog3.jpg"
                                            alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                    <p class="post_author">By <a href="#">admin</a> July 04, 2022</p>
                                    <h3 class="post_title"><a href="blog-details.html">Post with Audio</a></h3>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="frontend/img/blog/blog4.jpg"
                                            alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                    <p class="post_author">By <a href="#">admin</a> July 04, 2022</p>
                                    <h3 class="post_title"><a href="blog-details.html">Post with Video</a></h3>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="frontend/img/blog/blog5.jpg"
                                            alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                    <p class="post_author">By <a href="#">admin</a> July 04, 2022</p>
                                    <h3 class="post_title"><a href="blog-details.html">Maecenas ultricies</a></h3>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="brand_area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container owl-carousel">
                        <div class="brand_items">
                            <div class="single_brand">
                                <a href="#"><img src="frontend/img/brand/brand1.jpg" alt=""></a>
                            </div>
                            <div class="single_brand">
                                <a href="#"><img src="frontend/img/brand/brand2.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="brand_items">
                            <div class="single_brand">
                                <a href="#"><img src="frontend/img/brand/brand3.jpg" alt=""></a>
                            </div>
                            <div class="single_brand">
                                <a href="#"><img src="frontend/img/brand/brand4.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="brand_items">
                            <div class="single_brand">
                                <a href="#"><img src="frontend/img/brand/brand5.jpg" alt=""></a>
                            </div>
                            <div class="single_brand">
                                <a href="#"><img src="frontend/img/brand/brand6.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="brand_items">
                            <div class="single_brand">
                                <a href="#"><img src="frontend/img/brand/brand7.jpg" alt=""></a>
                            </div>
                            <div class="single_brand">
                                <a href="#"><img src="frontend/img/brand/brand8.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="brand_items">
                            <div class="single_brand">
                                <a href="#"><img src="frontend/img/brand/brand9.jpg" alt=""></a>
                            </div>
                            <div class="single_brand">
                                <a href="#"><img src="frontend/img/brand/brand10.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="brand_items">
                            <div class="single_brand">
                                <a href="#"><img src="frontend/img/brand/brand2.jpg" alt=""></a>
                            </div>
                            <div class="single_brand">
                                <a href="#"><img src="frontend/img/brand/brand3.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
