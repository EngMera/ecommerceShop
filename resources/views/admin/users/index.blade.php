@extends('layouts.admin')

@section('title','Users')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            @if (session('message'))
                <div class="alert alert-primary">{{ session('message') }}</div>
            @endif
            <div class="card">
                <div class="card-header  bg-primary d-flex justify-content-between ">
                    <h3 class="text-white mb-0">Users</h3>
                    <a href="{{ url('admin/users/create') }}" class="btn btn-light btn-sm ">
                        Add User
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if ($user->role_as == '0')
                                            <label class="badge btn-primary ">User</label>
                                        @elseif($user->role_as == '1')
                                            <label class="badge btn-warning text-black ">Admin</label>
                                        @else
                                            <label class="badge btn-danger ">None</label>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/users/'.$user->id.'/edit') }}" 
                                            class="btn btn-primary btn-sm  text-white">
                                            Edit
                                        </a>
                                        <a href="{{ url('admin/users/'.$user->id.'/delete') }}" 
                                           onclick="return confirm('Are you sure you want to delete this data?') "
                                           class="btn btn-danger  btn-sm text-white">
                                           Delete
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No users Avaliable</td>
                                    </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div>
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection