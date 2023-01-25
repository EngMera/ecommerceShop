@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12 ">
        @if (session('message'))
            <div class="alert alert-primary">{{ session('message') }}</div>
        @endif
        <div class="card">
            <div class="card-header d-flex justify-content-between ">
                <h3>Edit Product</h3>
                <a href="{{ url('admin/products') }}" class="btn btn-primary btn-sm text-white ">BACK</a>
            </div>
            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-warning">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif
                <form action="{{ url('admin/products/'.$product->id) }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    @method('PUT')
                    <ul class="nav nav-tabs " id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                                Home
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="seotag-tab" data-bs-toggle="tab" data-bs-target="#seotag-tab-pane" type="button" role="tab" aria-controls="seotag-tab-pane" aria-selected="false">
                                SEO 
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details-tab-pane" type="button" role="tab" aria-controls="details-tab-pane" aria-selected="false">
                                Details
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="image-tab" data-bs-toggle="tab" data-bs-target="#image-tab-pane" type="button" role="tab" aria-controls="image-tab-pane" aria-selected="false">
                                Product Image
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="color-tab" data-bs-toggle="tab" data-bs-target="#color-tab-pane" type="button" role="tab" aria-controls="color-tab-pane" aria-selected="false">
                                Product Color
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content border ps-3" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <label class="pt-5 me-2">Category</label>
                            <div class="mb-3" style="width: 20%">
                                <select name="category_id" class="form-select" aria-label="Floating label select example">
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"{{ $category->id == $product->category_id ? 'selected':''}}>
                                        {{ $category->name }}</option> 
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="">Product Name</label>
                                <input type="text" name="name" value ="{{ $product->name }}" class="form-control"/>
                            </div>
                            <div class="mb-3">
                                <label for="">Product Slug</label>
                                <input type="text" name="slug" value ="{{ $product->slug }}" class="form-control"/>
                            </div>
                            <div class="mb-3">
                                <label for="">Small Description</label>
                                <textarea name="small_description" class="form-control" rows="4">{{ $product->small_description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for=""> Description</label>
                                <textarea name="description" class="form-control" rows="4">{{ $product->description }}</textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="seotag-tab-pane" role="tabpanel" aria-labelledby="seotag-tab" tabindex="0">
                            <div class="mb-3 pt-5 ">
                                <label for=""> Meta Title</label>
                                <input type="text" name="meta_title" value="{{ $product->meta_title }}" class="form-control"/>
                            </div>
                            <div class="mb-3">
                                <label for="">Meta Description</label>
                                <textarea name="meta_description" class="form-control" rows="4">{{ $product->meta_description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for=""> Meta Keyword</label>
                                <textarea name="meta_keyword" class="form-control" rows="4">{{ $product->meta_keyword }}</textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab" tabindex="0">
                            <div class="row pt-5">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="">Original Price</label>
                                        <input type="text" name="original_price" value="{{ $product->original_price }}" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="">Selling Price</label>
                                        <input type="text" name="selling_price" value="{{ $product->selling_price }}" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="">Quantity</label>
                                        <input type="number" name="quantity" value="{{ $product->quantity }}" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="">Trending</label>
                                            <input type="checkbox" {{ $product->trending == '1' ? 'checked':'' }} name="trending" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="">Status</label>
                                            <input type="checkbox" {{ $product->status == '1' ? 'checked':'' }} name="status" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="">Featured</label>
                                            <input type="checkbox" {{ $product->featured == '1' ? 'checked':'' }} name="featured" />
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade mb-3" id="image-tab-pane" role="tabpanel" aria-labelledby="image-tab" tabindex="0">
                            <div class="mb-3 pt-5">
                                <label >Upload Product Images</label>
                            </div>
                            <input type="file" multiple name="image[]" class="form-control"/>
                            <div>
                                @if ($product->productImage)
                                <div class="row">
                                    @foreach ($product->productImage as $image)
                                    <div class="col-md-2">
                                      <img src="{{ asset($image->image) }}" class="border ps-3 mt-3" style="width: 150px; height:150px max-width:100%" alt="img"/>
                                      <a href="{{ url('admin/product-image/'.$image->id.'/delete')}}" class="btn btn-danger btn-sm text-white mt-3">Remove</a>
                                    </div>
                                    @endforeach
                                </div>
                                @else
                                    <h5>No Images </h5>
                                @endif
                            </div>
                            
                        </div>
                        <div class="tab-pane fade mb-3" id="color-tab-pane" role="tabpanel" aria-labelledby="color-tab" tabindex="0">
                            <div class="mb-3 pt-5">
                                <h4>Add Product Color</h4>
                                <label class="mb-3" >Select Color</label>
                                <hr/>
                                <div class="row">
                                    @forelse ($colors as $colorItem)
                                    <div class="col-md-3  ">
                                        <div class="p-2 border rounded">
                                            Color: <input type="checkbox" name="colors[{{ $colorItem->id }}]" value="{{ $colorItem->id }}" class="mb-2"> {{ $colorItem->name }}
                                            <br/>
                                            Quantity: <input type="number" name="colorquantity[{{ $colorItem->id }}]" style="width: 70px; border:1px solid;">
                                        </div>
                                    </div>
                                    @empty
                                    <div class="col-md-12  ">
                                        <h1>No Colors Found</h1>
                                    </div>
                                    @endforelse
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-sm table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Color Name</th>
                                            <th>Quantity</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($product->productColors as $prodColor)
                                        <tr class="prod-color-tr">
                                            <td>
                                                @if ($prodColor->color)
                                                  {{ $prodColor->color->name }}
                                                @else
                                                 <div class='alert alert-primary'> No Color Found</div>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="input-group mb-3" style="width:150px;">
                                                    <input type="text" value="{{ $prodColor->quantity }}" class="productColorQuantity form-control form-control-sm"/>
                                                    <button type="button" value="{{ $prodColor->id }}" class="updateProductColorBtn btn btn-primary btn-sm text-white">Update</button>
                                                </div>
                                            </td>
                                            <td>
                                                <button type="button" value="{{ $prodColor->id }}" class="deleteProductColorBtn btn btn-danger btn-sm text-white">Delete</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary text-white float-end">
                            Update
                        </button>
                    </div>
              </form>
            </div>
        </div>
    </div>
</div>

@endsection


@section('scripts')
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).on('click','.updateProductColorBtn',function () {
                var product_id = "{{ $product->id }}";
                var prod_color_id = $(this).val();
                var qty = $(this).closest('.prod-color-tr').find('.productColorQuantity').val();
                // alert(prod_color_id );

                if (qty <= 0) {
                    alert('Quatity is required');
                    return false;
                }

                var data = {
                    'product_id' : product_id,
                    'qty' : qty
                }

                $.ajax({
                    type: "POST",
                    url: "/admin/product-color/"+prod_color_id,
                    data: data,
                    success:function (response) {
                        alert(response.message);
                    }
                });
            });

            $(document).on('click','.deleteProductColorBtn',function () {
                var prod_color_id = $(this).val();
                var thisClick = $(this);
                $.ajax({
                    type: "GET",
                    url: "/admin/product-color/"+prod_color_id+"/delete",
                    success:function (response) {
                        thisClick.closest('.prod-color-tr').remove();
                        alert(response.message);
                    }
                });
            });
            
            
        });
    </script>
@endsection