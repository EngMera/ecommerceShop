@extends('layouts.admin')

@section('content')
<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between ">
                    <h3>Add Slider </h3>
                    <a href="{{ url('admin/sliders') }}" class="btn btn-primary btn-sm text-white ">
                        Back
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/sliders/create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control"/>
                        </div>
                        <div class="mb-3">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control"/>
                        </div>
                        <div class="mb-3">
                            <label>Status</label>
                            <input type="checkbox" name="status" />
                            <small>Check=Hidden,Uncheck=Visible</small>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary text-white float-end">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection