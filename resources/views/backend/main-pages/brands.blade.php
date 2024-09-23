@extends('layouts.backend')

@section('page-content')

<div class="card" style="background: rgba(0,0,0,.2);">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-title">Category Data</h5>
            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addBrandsModal">
                Add Brands
            </button>
        </div>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead style="color: white;">
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Category</th>
                        <th scope="col">Brands</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody style="color: white;">
                    @php $serialNumber = 1; @endphp
                    @foreach($categories as $category)
                        <tr>
                            <th scope="row">{{ $serialNumber++ }}</th>
                            <td>{{ $category->name }}</td>
                            <td>
                                @foreach($category->brands as $brand)
                                    {{ $brand->name }}
                                    @if (!$loop->last)
                                        ,
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-info" data-toggle="modal"
                                    data-target="#editCategoryModal{{ $category->id }}">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Are you sure?')">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add Brands Modal -->
<div class="modal fade" id="addBrandsModal" tabindex="-1" role="dialog" aria-labelledby="addBrandsModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('brands.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select class="form-control" id="category_id" name="category_id" required>
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="brands">Brands</label>
                        <div id="brandFields">
                            <input type="text" class="form-control mb-2" name="brands[]">
                        </div>
                        <button type="button" class="btn btn-sm btn-secondary mt-2" id="addMoreBrandsBtn">Add More
                            Brands</button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Brands</button>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- Edit Brands Modal -->
@foreach($categories as $category)
    <div class="modal fade" id="editCategoryModal{{ $category->id }}" tabindex="-1" role="dialog"
        aria-labelledby="editCategoryModalLabel{{ $category->id }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('brands.update', $category->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <input type="text" class="form-control" id="category" name="category"
                                value="{{ $category->name }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="brands">Brands</label>
                            <div id="brandFieldsContainer{{ $category->id }}">
                                @foreach($category->brands as $brand)
                                    <div class="d-flex mb-2">
                                        <input type="text" class="form-control" name="brands[]" value="{{ $brand->name }}">
                                        <button type="button" class="btn btn-sm btn-danger ml-2"
                                            onclick="removeBrandField(this)">Remove</button>
                                        <input type="hidden" name="brand_ids[]" value="{{ $brand->id }}">
                                    </div>
                                @endforeach
                            </div>
                            <button type="button" class="btn btn-sm btn-secondary mt-2 add-more-brands"
                                data-category-id="{{ $category->id }}">Add More Brands</button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Handle dynamic addition of brand fields in Add Brands modal
        document.getElementById('addMoreBrandsBtn').addEventListener('click', function () {
            const brandFields = document.getElementById('brandFields');
            const inputDiv = document.createElement('div');
            inputDiv.className = 'd-flex mb-2';

            const input = document.createElement('input');
            input.type = 'text';
            input.className = 'form-control';
            input.name = 'brands[]';

            const removeBtn = document.createElement('button');
            removeBtn.type = 'button';
            removeBtn.className = 'btn btn-sm btn-danger ml-2';
            removeBtn.textContent = 'Remove';
            removeBtn.onclick = function () {
                inputDiv.remove();
            };

            inputDiv.appendChild(input);
            inputDiv.appendChild(removeBtn);
            brandFields.appendChild(inputDiv);
        });

        // Handle dynamic addition of brand fields in Edit Brands modal
        document.querySelectorAll('.add-more-brands').forEach(function (button) {
            button.addEventListener('click', function () {
                const categoryId = this.getAttribute('data-category-id');
                const brandFieldsContainer = document.getElementById('brandFieldsContainer' + categoryId);
                const inputDiv = document.createElement('div');
                inputDiv.className = 'd-flex mb-2';

                const input = document.createElement('input');
                input.type = 'text';
                input.className = 'form-control';
                input.name = 'brands[]';

                const removeBtn = document.createElement('button');
                removeBtn.type = 'button';
                removeBtn.className = 'btn btn-sm btn-danger ml-2';
                removeBtn.textContent = 'Remove';
                removeBtn.onclick = function () {
                    inputDiv.remove();
                };

                inputDiv.appendChild(input);
                inputDiv.appendChild(removeBtn);
                brandFieldsContainer.appendChild(inputDiv);
            });
        });
    });

    // Handle removing brand fields
    function removeBrandField(button) {
        const brandField = button.parentNode;
        brandField.remove();
    }

</script>

@endsection
