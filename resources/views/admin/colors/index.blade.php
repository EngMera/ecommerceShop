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
                    <h3> Color List</h3>
                    <a href="{{ url('admin/colors/create') }}" class="btn btn-primary btn-sm text-white ">
                        Add Color
                    </a>
                </div>
                <div class="card-body">
                    <table class=" table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Color Name</th>
                                <th>Color Code</th>
                                <th>Color Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($colors as $color)
                                <tr>
                                    <td>{{ $color->id }}</td>
                                    <td>{{ $color->name }}</td>
                                    <td>{{ $color->code }}</td>
                                    <td>{{ $color->status ? 'Hidden' : 'Visible'}}</td>
                                    <td>
                                        <a href="{{ url('admin/colors/'.$color->id.'/edit') }}" class="btn btn-primary btn-sm text-white">Edit</a>
                                        <a href="{{ url('admin/colors/'.$color->id.'/delete') }}" onclick="return confirm('Are you sure you want to delete this data ?')" class="btn btn-danger btn-sm text-white">Delete</a>
                                    </td>
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