@extends('layouts.backend')

@section('page-content')
<div class="card" style="background: rgba(0,0,0,.2);">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-title">Products Data</h5>
            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addProductModal">
                Add Product
            </button>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr style="color: white;">
                        <th>#</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Product Name</th>
                        <th>Product Image</th>
                        <th>Sale Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody style="color: white;">
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $product->category->name ?? 'N/A' }}</td>
                            <td>{{ $product->brand->name }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>
                            @if($product->product_image)
                            <img src="{{ asset('storage/' . $product->product_image) }}" alt="{{ $product->product_name }}" style="width: 50px; height: 50px;">
                            @else
                            No image
                            @endif
                            </td>
                            <td>{{ $product->sale_price }}</td>
                            <td>
                                <button class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#editProductModal-{{ $product->id }}">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>
                                <form action="{{ route('delete_product', $product->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                            class="zmdi zmdi-delete"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

<!-- Add Product Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProductModalLabel">Add Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('store_product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <!-- Product Form Fields -->
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category_id" id="category" class="form-control">
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="brand">Brand</label>
                        <select name="brand_id" id="brand" class="form-control">
                            <option value="">Select Brand</option>
                            @foreach($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="product_name">Product Name</label>
                        <input type="text" name="product_name" id="product_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="slug">Product Slug</label>
                        <input type="text" name="slug" id="slug" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="regular_price">Regular Price</label>
                        <input type="text" name="regular_price" id="regular_price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="sale_price">Sale Price</label>
                        <input type="text" name="sale_price" id="sale_price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="product_image">Product Image</label>
                        <input type="file" name="product_image" id="product_image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="gallery_images">Gallery Images</label>
                        <input type="file" name="gallery_images[]" id="gallery_images" class="form-control" multiple>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save Product</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

        <!-- Edit Product Modal -->
        @foreach($products as $product)
            <div class="modal fade" id="editProductModal-{{ $product->id }}" tabindex="-1" role="dialog"
                aria-labelledby="editProductModalLabel-{{ $product->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editProductModalLabel-{{ $product->id }}">Edit Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('update_product', $product->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select name="category_id" id="category" class="form-control">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="brand">Brand</label>
                                    <select name="brand_id" id="brand" class="form-control">
                                        <option value="">Select Brand</option>
                                        @foreach($brands as $brand)
                                            <option value="{{ $brand->id }}"
                                                {{ $product->brand_id == $brand->id ? 'selected' : '' }}>
                                                {{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="product_name">Product Name</label>
                                    <input type="text" name="product_name" id="product_name" value="{{ $product->product_name }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="slug">Product Slug</label>
                                    <input type="text" name="slug" id="slug" value="{{ $product->slug }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="regular_price">Regular Price</label>
                                    <input type="text" name="regular_price" id="regular_price"
                                        value="{{ $product->regular_price }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="sale_price">Sale Price</label>
                                    <input type="text" name="sale_price" id="sale_price"
                                        value="{{ $product->sale_price }}" class="form-control">
                                </div>
                                <div class="form-group">
                                            <label for="product_image-{{ $product->id }}">Product Image</label>
                                            <input type="file" name="product_image" class="form-control">
                                            @if($product->product_image)
                                            <img src="{{ asset('storage/' . $product->product_image) }}"
                                                alt="Product Image" width="100">
                                            @endif
                                        </div>
                                        <div class="form-group">
    <label for="gallery_images-{{ $product->id }}">Gallery Images</label>
    <input type="file" name="gallery_images[]" id="gallery_images-{{ $product->id }}" class="form-control" multiple>
    @if($product->gallery_images)
        @php
            $galleryImages = json_decode($product->gallery_images, true);
        @endphp
        @foreach($galleryImages as $image)
            <img src="{{ asset('storage/' . $image) }}" alt="Gallery Images" width="100">
        @endforeach
    @endif
</div>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>

    $(document).ready(function() {
        $('#category').change(function() {
            var categoryId = $(this).val();
            
            if (categoryId) {
                $.ajax({
                    url: '/brands/' + categoryId,
                    type: 'GET',
                    success: function(data) {
                        var $brand = $('#brand');
                        $brand.empty(); // Clear existing options
                        $brand.append('<option value="">Select Brand</option>');
                        
                        $.each(data, function(index, brand) {
                            $brand.append('<option value="' + brand.id + '">' + brand.name + '</option>');
                        });
                    }
                });
            } else {
                $('#brand').empty().append('<option value="">Select Brand</option>');
            }
        });
    });


</script>



@endsection
