@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
      @if (session('message'))
              <h2 class="alert alert-primary"> {{ session('message') }} </h2>
       @endif


      <div class="me-md-3 me-xl-5">
        <h2>Dashboard,</h2>
        <p class="mb-md-0">Your analytics dashboard template. </p>
        <hr>
      </div>

      <div class="row">

          <div class="col-md-3">
            <div class="card card-body bg-primary text-white mb-3 rounded">
                <label>Total Orders</label>
                <h4>{{ $totalOrders }}</h4>
                <a href="{{ url('admin/orders') }}" class="text-white">view</a>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-body bg-success text-white mb-3 rounded">
                <label>Today Orders</label>
                <h4>{{ $todayOrders }}</h4>
                <a href="{{ url('admin/orders') }}" class="text-white">view</a>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-body bg-warning text-white mb-3 rounded">
                <label>This Month Orders</label>
                <h4>{{ $thisMonthOrders }}</h4>
                <a href="{{ url('admin/orders') }}" class="text-white">view</a>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-body bg-danger text-white mb-3 rounded">
                <label>This Year Orders</label>
                <h4>{{ $thisMonthOrders }}</h4>
                <a href="{{ url('admin/orders') }}" class="text-white">view</a>
            </div>
          </div>
          <hr>

          

          <div class="col-md-3">
            <div class="card card-body bg-primary text-white mb-3 rounded">
                <label>Total All Users</label>
                <h4>{{ $totalAllUsers }}</h4>
                <a href="{{ url('admin/users') }}" class="text-white">view</a>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-body bg-success text-white mb-3 rounded">
                <label>Total Admins</label>
                <h4>{{ $totalAdmins }}</h4>
                <a href="{{ url('admin/users') }}" class="text-white">view</a>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-body bg-warning text-white mb-3 rounded">
                <label>Total Users</label>
                <h4>{{ $totalUsers }}</h4>
                <a href="{{ url('admin/users') }}" class="text-white">view</a>
            </div>
          </div>
          <hr>

          <div class="col-md-3">
            <div class="card card-body bg-primary text-white mb-3 rounded">
                <label>Total Products</label>
                <h4>{{  $totalProducts  }}</h4>
                <a href="{{ url('admin/products') }}" class="text-white">view</a>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-body bg-success text-white mb-3 rounded">
                <label>Total Categories</label>
                <h4>{{ $totalCategories }}</h4>
                <a href="{{ url('admin/category') }}" class="text-white">view</a>
            </div>
          </div>

          

      </div>

    </div>
  </div>
@endsection