@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between ">
                <h3>Add Product</h3>
                <a href="{{ url('admin/products') }}" class="btn btn-primary btn-sm text-white ">BACK</a>
            </div>
            <div class="card-body ">
                @if ($errors->any())
                    <div class="alert alert-warning">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                    
                @endif
                <form action="{{ url('admin/products') }}" method="POST" enctype="multipart/form-data" class="border border-top-0">
                    @csrf
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
                                Product Colors
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active  ps-3 pe-3" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <label class="pt-5 me-2">Category</label>
                            <div class="mb-3" style="width: 20%">
                                <select name="category_id" class="form-select" aria-label="Floating label select example">
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option> 
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="">Product Name</label>
                                <input type="text" name="name" class="form-control"/>
                            </div>
                            <div class="mb-3">
                                <label for="">Product Slug</label>
                                <input type="text" name="slug" class="form-control"/>
                            </div>
                            <div class="mb-3">
                                <label for="">Small Description</label>
                                <textarea name="small_description" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for=""> Description</label>
                                <textarea name="description" class="form-control" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade  ps-3 pe-3" id="seotag-tab-pane" role="tabpanel" aria-labelledby="seotag-tab" tabindex="0">
                            <div class="mb-3 pt-5 ">
                                <label for=""> Meta Title</label>
                                <input type="text" name="meta_title" class="form-control"/>
                            </div>
                            <div class="mb-3">
                                <label for="">Meta Description</label>
                                <textarea name="meta_description" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for=""> Meta Keyword</label>
                                <textarea name="meta_keyword" class="form-control" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade ps-3 pe-3" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab" tabindex="0">
                            <div class="row pt-5">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="">Original Price</label>
                                        <input type="text" name="original_price" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="">Selling Price</label>
                                        <input type="text" name="selling_price" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="">Quantity</label>
                                        <input type="number" name="quantity" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="">Trending</label>
                                            <input type="checkbox" name="trending" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="">Status</label>
                                            <input type="checkbox" name="status" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="">Featured</label>
                                            <input type="checkbox" name="Featured" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade mb-3  ps-3 pe-3" id="image-tab-pane" role="tabpanel" aria-labelledby="image-tab" tabindex="0">
                            <div class="mb-3 pt-5">
                                <label >Upload Product Images</label>
                            </div>
                            <input type="file" multiple name="image[]" class="form-control mb-5 "/>
                        </div>
                        <div class="tab-pane fade  mb-3  ps-3 pe-3" id="color-tab-pane" role="tabpanel" aria-labelledby="color-tab" tabindex="0">
                            <div class="mb-3 pt-5">
                                <label class="mb-3" >Select Color</label>
                                <hr/>
                                <div class="row">
                                    @forelse ($colors as $colorItem)
                                        <div class="col-md-3  ">
                                            <div class="p-2 border rounded">
                                                Color: <input type="checkbox" name="colors[{{ $colorItem->id }}]" value="{{ $colorItem->id }}"> {{ $colorItem->name }}
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
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary text-white float-end mt-3">
                            Submit
                        </button>
                    </div>
              </form>
            </div>
        </div>
    </div>
</div>

@endsection