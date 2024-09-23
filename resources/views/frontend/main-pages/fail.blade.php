@extends('layouts.frontend')

@section('page-content')
    <div class="order-success py-5 d-grid justify-content-center"
        style="    background: #f6f6f6;
    border-bottom: 1px gray solid;">
        <h3 class="text-center">Order Failed</h3>
        <a href="{{ route('cart') }}" class="btn btn-primary mt-3">Go to Cart</a>
    </div>
@endsection
