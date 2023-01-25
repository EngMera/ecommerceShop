@extends('layouts.admin')

@section('content')
<div>
    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-primary">
                    {{ session('message') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header d-flex justify-content-between ">
                    <h3> Product</h3>
                    <a href="{{ url('admin/products/create') }}" class="btn btn-primary btn-sm text-white ">
                        Add Product
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>
                                        @if ($product->category)
                                            {{ $product->category->name }}
                                        @else
                                            No Category
                                        @endif
                                    </td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->selling_price }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ $product->status == '1'? 'Hidden':'visible'}}</td>
                                    <td>
                                        <a href="{{ url('admin/products/'.$product->id.'/edit') }}" class="btn btn-primary btn-sm  text-white">Edit</a>
                                        <a href="{{ url('admin/products/'.$product->id.'/delete') }}" onclick="return confirm('Are you sure you want to delete this data?') " class="btn btn-danger  btn-sm text-white">Delete</a>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="7">No Products Avaliable</td>
                                    </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection