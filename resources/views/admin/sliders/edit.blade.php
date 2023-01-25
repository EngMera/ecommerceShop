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
                    <h3> Edit Slider </h3>
                    <a href="{{ url('admin/sliders') }}" class="btn btn-primary btn-sm text-white ">
                        Back
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/sliders/'.$slider->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label>Title</label>
                            <input type="text" name="title" value="{{ $slider->title }}" class="form-control"/>
                        </div>
                        <div class="mb-3">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="3">{{ $slider->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control"/>
                            <img src="{{ asset("$slider->image") }}" style="width:50px; height:50px;" alt="slider"/>
                        </div>
                        <div class="mb-3">
                            <label>Status</label>
                            <input type="checkbox" name="status" {{ $slider->status == '1' ? 'checked' :'' }}/>
                            <small>Check=Hidden,Uncheck=Visible</small>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary text-white float-end">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection