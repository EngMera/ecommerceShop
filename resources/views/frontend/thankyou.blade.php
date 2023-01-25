@extends('layouts.app')
@section('title','Thank You for Shopping ')
    
@section('content')
  <div class="py-5 pyt-md-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                @if (session('message'))
                <h5 class="alert alert-primary">
                    {{ session('message') }}
                </h5>
                @endif
                <div class="p-4 shadow- bg-white rounded">
                    <h2>Your Logo</h2>
                <h4>Thank You for shopping with us</h4>
                <a href="{{ url('collections') }}" class="btn btn-primary my-3">Shop now</a>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection