@extends('layouts.admin')

@section('title','Edite User')

@section('content')
    <div class="row">
        <div class="col-md-12 ">

            <div class="card">
                <div class="card-header  bg-primary d-flex justify-content-between ">
                    <h3 class="text-white mb-0">Edit User</h3>
                    <a href="{{ url('admin/users') }}" class="btn btn-light btn-sm ">
                        Back
                    </a>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <ul class="alert alert-warning">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        
                    @endif
                    <form action="{{ url('admin/users/'.$user->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label >Name</label>
                                <input type="text" name="name" class="form-control"value="{{ $user->name }}"/>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label >Email</label>
                                <input type="text" name="email" class="form-control" value="{{ $user->email }}"/>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label >Password</label>
                                <input type="text" name="password" class="form-control"/>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label >Select Role</label>
                                <select name="role_as" class="form-control">
                                    <option value="">Select Role</option>
                                    <option value="0" {{ $user->role_as == '0' ? 'selected' : '' }}>User</option>
                                    <option value="1" {{ $user->role_as == '1' ? 'selected' : '' }}>Admin</option>
                                </select>
                            </div>
                            <div class="col-md-12 text-end">
                                <button type="submit" class="btn btn-primary text-white">Update</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
@endsection