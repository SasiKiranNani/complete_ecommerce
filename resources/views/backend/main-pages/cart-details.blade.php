@extends('layouts.backend')

@section('page-content')
<div class="card" style="background: rgba(0,0,0,.2);">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-title">User Details</h5>
        </div>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead style="color: white;">
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">User Name</th>
                        <th scope="col">User Email</th>
                        {{-- <th scope="col">Address</th> --}}
                        <th scope="col">Phone Number</th>
                        <th scope="col" style="text-align: center; vertical-align: middle;">Action</th>
                    </tr>
                </thead>
                <tbody style="color: white;">
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>
                            {{ $user->name }}
                            </td>
                            <td>{{ $user->email }}</td>
                            {{-- <td>{{ $user->address }}</td> --}}
                            <td>{{ $user->phone_number }}</td>
                            <td>
                                <form action="{{ route('cart.user', $user->id) }}" method="GET"
                                    style="display:inline-block;">
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        View Details
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
@endsection