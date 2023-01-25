@extends('layouts.app')
@section('title','Home Page')
    
@section('content')
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    {{-- <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div> --}}
    <div class="carousel-inner">
        @foreach ($sliders as $key => $sliderItem)
        <div class="carousel-item {{ $key == 0 ? 'active': ''}} ">
            @if ($sliderItem->image)
            <img src="{{ asset("$sliderItem->image") }}" class="d-block w-100 "alt="slider" style="max-width:100%;">
                
            @endif
            <div class="carousel-caption d-none d-md-block">
            <h5>{{ $sliderItem->title }}</h5>
            <p>{{ $sliderItem->description }}</p>
            </div>
        </div>
        @endforeach
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>


  <div class="py-5 bg-white">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <h4>Welcome To MeraTech</h4>
          <div class="underline mx-auto"></div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Reiciendis eligendi quae ab esse tenetur quibusdam aspernatur
            perspiciatis commodi distinctio repellat, quos fuga voluptatum
            deleniti dolor dolorum rerum enim iusto voluptates!
          </p>
        </div>
      </div>
    </div>
  </div>

  {{-- trending products  --}}
  <div class="bg-light">
    <div class="py-5	">
      <div class="container">
        <div class="row ">
          <div class="col-md-12 mb-5">
            <h4>Trending Products</h4>
            <div class="underline"></div>
          </div>
          @if ($trendingProducts)
              <div class="col-md-12">
                <div class="owl-carousel owl-theme for-carousal">

                    @foreach ($trendingProducts as $productItem)
                        <div class="item">
                              <div class="product-card">
                                  <div class="product-card-img">
                                      <label class="stock bg-primary">Trend</label>
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
                    @endforeach
                </div>
              </div>
          @else
              <div class="col-md-12">
                  <div class="p-2">
                      <h4>No Products Available</h4>
                  </div>
              </div>
          @endif
        </div>
      </div>
    </div>
  </div>

  {{-- New Arrivals Products --}}
  <div class="py-5 ">
    <div class="container">
      <div class="row ">
        <div class="col-md-12 mb-5">
          <h4>New Arrivals
            <a href="{{ url('new-arrivals') }}" class="btn btn-primary btn-sm text-white float-end">more</a>
          </h4>
          <div class="underline"></div>
        </div>
        @if ($newArrivalsProducts)
            <div class="col-md-12">
              <div class="owl-carousel owl-theme for-carousal">

                  @foreach ($newArrivalsProducts as $productItem)
                      <div class="item">
                            <div class="product-card">
                                <div class="product-card-img">
                                    <label class="stock bg-primary">New</label>
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
                  @endforeach
              </div>
            </div>
        @else
            <div class="col-md-12">
                <div class="p-2">
                    <h4>No Products Available</h4>
                </div>
            </div>
        @endif
      </div>
    </div>
  </div>

  {{-- FEATURED products  --}}
  <div class="bg-light">
    <div class="py-5	">
    <div class="container">
      <div class="row ">
        <div class="col-md-12 mb-5">
          <h4>Trending Products
            <a href="{{ url('featured') }}" class="btn btn-primary btn-sm text-white float-end">more</a>
          </h4>
          <div class="underline"></div>
        </div>
        @if ($featuredProducts)
            <div class="col-md-12">
              <div class="owl-carousel owl-theme for-carousal">

                  @foreach ($featuredProducts as $productItem)
                      <div class="item">
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
                  @endforeach
              </div>
            </div>
        @else
            <div class="col-md-12">
                <div class="p-2">
                    <h4>No Products Available</h4>
                </div>
            </div>
        @endif
      </div>
    </div>
    </div>
  </div>

@endsection

@section('script')
    <script>
      $('.for-carousal').owlCarousel({
          loop:true,
          margin:10,
          dots:true,
          nav:false,
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:3
              },
              1000:{
                  items:4
              }
          }
      })
    </script>
@endsection