<div>
    <div class="py-3 py-md-5 bg-light">
        <div class="container">
            @if (session()->has('message'))
                <div class="alert alert-primary">
                    {{ session('message') }}
                </div>
            @endif
            <div class="row">
                
                <div class="col-md-5 mt-3">
                    <div class="bg-white border">
                        @if ($product->productImage)
                        <div class="exzoom" id="exzoom">

                            <div class="exzoom_img_box">
                                <ul class='exzoom_img_ul'>
                                    @foreach ($product->productImage as $itemImg)
                                        <li><img src="{{ asset($itemImg->image) }}"style="max-width: 100%" ></li>
                                    @endforeach
                                </ul>
                            </div>
                            
                            <div class="exzoom_nav"></div>
                            <p class="exzoom_btn">
                                <a href="javascript:void(0);" class="exzoom_prev_btn"> < </a>
                                <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
                            </p>
                        </div>
                        @else
                            No image Added
                        @endif                      
                    </div>
                </div>

                <div class="col-md-7 mt-3">
                    <div class="product-view">
                        <h4 class="product-name">
                            {{ $product->name }}
                            @if ($product->quantity)
                            <label class="label-stock bg-primary p-2">In Stock</label>
                            @else
                            <label class="label-stock bg-danger p-2">Out of Stock</label>
                            @endif
                        </h4>
                        
                        <hr>
                        <p class="product-path">
                            Home / {{ $product->category->name }} / {{ $product->name }} 
                        </p>
                        <div>
                            <span class="selling-price">${{ $product->selling_price }} </span>
                            <span class="original-price">${{ $product->original_price }} </span>
                        </div>
                        <div>
                            @if ($product->productColors->count() > 0)
                                @if ($product->productColors)
                                    @foreach($product->productColors as $colorItem)
                                    <label class="colorSelectionLabel" style="background-color: #{{ $colorItem->color->code }}"
                                        wire:click="colorSelected({{ $colorItem->id }})"
                                        >
                                        {{ $colorItem->color->name }}
                                    </label>
                                    @endforeach
                                @endif
                                <div>
                                    @if ($this->productColorSelectedQuantity == 'outOfStock')
                                    <label class="btn-sm mt-2 p-1 text-white rounded-1 bg-danger ">Out of Stock</label>
                                    @elseif($this->productColorSelectedQuantity > 0)
                                    <label class="btn-sm mt-2 p-1 text-white rounded-1 bg-primary">In Stock</label>
                                    @endif
                                </div>
                            @endif

                        </div>
                        <div class="mt-2">
                            <div class="input-group">
                                <span class="btn btn1" wire:click="decrementQuantity"><i class="fa fa-minus"></i></span>
                                <input type="text" wire:model="quantityCount" value="{{ $this->quantityCount }}"  readonly class="input-quantity" />
                                <span class="btn btn1" wire:click="incrementQuantity"><i class="fa fa-plus"></i></span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="button" wire:click="addToCart({{ $product->id }})" class="btn btn1"> 
                                <span wire:loading.remove wire:target="addToCart">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </span>
                                <span wire:loading wire:target="addToCart">
                                    <i class="fa fa-shopping-cart"></i>  Adding...
                                </span>
                            </button>
                            <button type="button" wire:click="addToWishlist({{ $product->id }})" class="btn btn1"> 
                                <span wire:loading.remove wire:target="addToWishlist">
                                    <i class="fa fa-heart" ></i> 
                                    Add To Wishlist 
                                </span>
                                <span wire:loading wire:target="addToWishlist">
                                    <i class="fa fa-heart" ></i> Adding...
                                </span>
                            </button>
                        </div>
                        <div class="mt-3">
                            <h5 class="mb-0">Small Description</h5>
                            <p>
                                {!! $product->small_description !!} 
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header bg-white">
                            <h4>Description</h4>
                        </div>
                        <div class="card-body">
                            <p>
                                {!! $product->description  !!} 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="py-3 py-md-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <h3>Related 
                        @if ($category)
                            {{ $category->name  }}
                        @endif
                        Products</h3>
                    <div class="underline"></div>
                    
                </div>
                <div class="col-md-12">
                    @if ($category)
                        <div class="owl-carousel owl-theme for-carousal">
                            @foreach ($category->relatedProducts->take(8) as $productItem)
                                <div class="item mb-3">
                                    <div class="product-card">
                                        <div class="product-card-img">
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
                    @else
                        <div class="col-md-12 p-2">
                            <h4>No Products Available</h4>
                        </div>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
        <script>
            $(function(){

                $("#exzoom").exzoom({

                    "navWidth": 60,
                    "navHeight": 60,
                    "navItemNum": 5,
                    "navItemMargin": 7,
                    "navBorder": 1,
                    "autoPlay": false,
                    "autoPlayTimeout": 2000

                });

            });

            // owl scripts 
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
@endpush