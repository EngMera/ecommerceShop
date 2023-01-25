@extends('layouts.app')
@section('title','Featured')
    
@section('content')

            <div class="py-5 ">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-12 mb-5">
                        <h4>Featured</h4>
                        <div class="underline"></div>
                        </div>
                        @forelse ($featuredProducts as $productItem)
                            <div class="col-md-3">
                                <div class="product-card">
                                    <div class="product-card-img">
                                        <label class="stock bg-primary">Featured</label>
                                        @if ($productItem->productImage->count() > 0)
                                            <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug ) }}">
                                            <img src="{{ asset($productItem->productImage[0]->image) }}" alt="{{ $productItem->name }}" style="width:300px; height:300px; max-width:100%;">
                                            </a>
                                        @endif
                                    </div>
                                    <div class="product-card-body">
                                        <h5 class="product-name">
                                            <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug ) }}">
                                                    {{ $productItem->name }}
                                            </a>
                                        </h5>
                                        <div>
                                            <span class="selling-price">${{ $productItem->selling_price }}</span>
                                            <span class="original-price">${{ $productItem->original_price }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-md-12 p-2">
                                <h4>No Products Available</h4>
                            </div>
                        @endforelse
                        <div class="text-center">
                            <a href="{{ url('collections') }}" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>
            </div>
@endsection