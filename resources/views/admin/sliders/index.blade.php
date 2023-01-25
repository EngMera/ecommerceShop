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
                    <h3> Slider List</h3>
                    <a href="{{ url('admin/sliders/create') }}" class="btn btn-primary btn-sm text-white ">
                        Add Slider
                    </a>
                </div>
                <div class="card-body">
                    <table class=" table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sliders as $slider)
                                <tr>
                                    <td>{{ $slider->id }}</td>
                                    <td>{{ $slider->title }}</td>
                                    <td>{{ $slider->description }}</td>
                                    <td>
                                        <img src="{{ asset("$slider->image") }}" style="width:70px; height:70px;" alt="Slider">
                                    </td>
                                    <td>{{ $slider->status == '0' ? 'Visible':'Hidden' }}</td>
                                    <td>
                                        <a href="{{ url('admin/sliders/'.$slider->id.'/edit') }}" class="btn btn-primary text-white">Edit</a>
                                        <a href="{{ url('admin/sliders/'.$slider->id.'/delete') }}"
                                             class="btn btn-danger text-white"
                                             onclick="return confirm('Are you sure you want to delete this slider ?');"
                                        >
                                             Delete
                                        </a>
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