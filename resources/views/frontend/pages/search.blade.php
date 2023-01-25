@extends('layouts.app')
@section('title','Search Products')
    
@section('content')

            <div class="py-5 ">
                <div class="container">
                    <div class="row justify-content-center ">
                        <div class="col-md-10 mb-5">
                        <h4>Search Results</h4>
                        <div class="underline"></div>
                        </div>
                        @forelse ($searchProducts as $productItem)
                        <div class="col-md-10">
                            <div class="product-card">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="product-card-img">
                                            <label class="stock bg-primary">New</label>
                                            @if ($productItem->productImage->count() > 0)
                                                <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug ) }}">
                                                <img src="{{ asset($productItem->productImage[0]->image) }}" alt="{{ $productItem->name }}" style="width:300px; height:300px; max-width:100%;">
                                                </a>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="col-md-9">
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
                                            <p style="height: 45px; overflow:hidden">
                                                <b>Description: </b>
                                                {{ $productItem->description }}
                                            </p>
                                            <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug ) }}" class="btn btn-outline-primary ">view</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        @empty
                            <div class="col-md-12 p-2">
                                <h4>No Such Products Found</h4>
                            </div>
                        @endforelse
                        <div class="col-md-10 ">
                            {{ $searchProducts->appends(request()->input())->links() }}
                        </div>
                    </div>
                </div>
            </div>
@endsection