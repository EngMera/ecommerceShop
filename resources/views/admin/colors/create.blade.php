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
                    <h3> Create Color </h3>
                    <a href="{{ url('admin/colors') }}" class="btn btn-primary btn-sm text-white ">
                        Back
                    </a>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-warning">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                    
                @endif
                    <form action="{{ url('admin/colors/create') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label >Color Name</label>
                            <input type="text" name="name" class="form-control"/>
                        </div>
                        <div class="mb-3">
                            <label >Color Code</label>
                            <input type="text" name="code" class="form-control"/>
                        </div>
                        <div class="mb-3">
                            <label >Status</label>
                            <input type="checkbox" name="status" style="width: 20px; height:20px;" />
                            <small style="font-size: 12px; color:#777;">Check=Hidden,Uncheck=Visible</small>
                        </div>
                        <div class="mb-3">
                            <button  type="Submit" class="btn btn-primary float-end text-white">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection