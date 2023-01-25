

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12 ">
        <?php if(session('message')): ?>
            <div class="alert alert-primary"><?php echo e(session('message')); ?></div>
        <?php endif; ?>
        <div class="card">
            <div class="card-header d-flex justify-content-between ">
                <h3>Edit Product</h3>
                <a href="<?php echo e(url('admin/products')); ?>" class="btn btn-primary btn-sm text-white ">BACK</a>
            </div>
            <div class="card-body">

                <?php if($errors->any()): ?>
                    <div class="alert alert-warning">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div><?php echo e($error); ?></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
                <form action="<?php echo e(url('admin/products/'.$product->id)); ?>" method="POST" enctype="multipart/form-data" >
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
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
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>"<?php echo e($category->id == $product->category_id ? 'selected':''); ?>>
                                        <?php echo e($category->name); ?></option> 
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="">Product Name</label>
                                <input type="text" name="name" value ="<?php echo e($product->name); ?>" class="form-control"/>
                            </div>
                            <div class="mb-3">
                                <label for="">Product Slug</label>
                                <input type="text" name="slug" value ="<?php echo e($product->slug); ?>" class="form-control"/>
                            </div>
                            <div class="mb-3">
                                <label for="">Small Description</label>
                                <textarea name="small_description" class="form-control" rows="4"><?php echo e($product->small_description); ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for=""> Description</label>
                                <textarea name="description" class="form-control" rows="4"><?php echo e($product->description); ?></textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="seotag-tab-pane" role="tabpanel" aria-labelledby="seotag-tab" tabindex="0">
                            <div class="mb-3 pt-5 ">
                                <label for=""> Meta Title</label>
                                <input type="text" name="meta_title" value="<?php echo e($product->meta_title); ?>" class="form-control"/>
                            </div>
                            <div class="mb-3">
                                <label for="">Meta Description</label>
                                <textarea name="meta_description" class="form-control" rows="4"><?php echo e($product->meta_description); ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for=""> Meta Keyword</label>
                                <textarea name="meta_keyword" class="form-control" rows="4"><?php echo e($product->meta_keyword); ?></textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab" tabindex="0">
                            <div class="row pt-5">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="">Original Price</label>
                                        <input type="text" name="original_price" value="<?php echo e($product->original_price); ?>" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="">Selling Price</label>
                                        <input type="text" name="selling_price" value="<?php echo e($product->selling_price); ?>" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="">Quantity</label>
                                        <input type="number" name="quantity" value="<?php echo e($product->quantity); ?>" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="">Trending</label>
                                            <input type="checkbox" <?php echo e($product->trending == '1' ? 'checked':''); ?> name="trending" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="">Status</label>
                                            <input type="checkbox" <?php echo e($product->status == '1' ? 'checked':''); ?> name="status" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="">Featured</label>
                                            <input type="checkbox" <?php echo e($product->featured == '1' ? 'checked':''); ?> name="featured" />
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
                                <?php if($product->productImage): ?>
                                <div class="row">
                                    <?php $__currentLoopData = $product->productImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-2">
                                      <img src="<?php echo e(asset($image->image)); ?>" class="border ps-3 mt-3" style="width: 150px; height:150px max-width:100%" alt="img"/>
                                      <a href="<?php echo e(url('admin/product-image/'.$image->id.'/delete')); ?>" class="btn btn-danger btn-sm text-white mt-3">Remove</a>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <?php else: ?>
                                    <h5>No Images </h5>
                                <?php endif; ?>
                            </div>
                            
                        </div>
                        <div class="tab-pane fade mb-3" id="color-tab-pane" role="tabpanel" aria-labelledby="color-tab" tabindex="0">
                            <div class="mb-3 pt-5">
                                <h4>Add Product Color</h4>
                                <label class="mb-3" >Select Color</label>
                                <hr/>
                                <div class="row">
                                    <?php $__empty_1 = true; $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $colorItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <div class="col-md-3  ">
                                        <div class="p-2 border rounded">
                                            Color: <input type="checkbox" name="colors[<?php echo e($colorItem->id); ?>]" value="<?php echo e($colorItem->id); ?>" class="mb-2"> <?php echo e($colorItem->name); ?>

                                            <br/>
                                            Quantity: <input type="number" name="colorquantity[<?php echo e($colorItem->id); ?>]" style="width: 70px; border:1px solid;">
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <div class="col-md-12  ">
                                        <h1>No Colors Found</h1>
                                    </div>
                                    <?php endif; ?>
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
                                        <?php $__currentLoopData = $product->productColors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prodColor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="prod-color-tr">
                                            <td>
                                                <?php if($prodColor->color): ?>
                                                  <?php echo e($prodColor->color->name); ?>

                                                <?php else: ?>
                                                 <div class='alert alert-primary'> No Color Found</div>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <div class="input-group mb-3" style="width:150px;">
                                                    <input type="text" value="<?php echo e($prodColor->quantity); ?>" class="productColorQuantity form-control form-control-sm"/>
                                                    <button type="button" value="<?php echo e($prodColor->id); ?>" class="updateProductColorBtn btn btn-primary btn-sm text-white">Update</button>
                                                </div>
                                            </td>
                                            <td>
                                                <button type="button" value="<?php echo e($prodColor->id); ?>" class="deleteProductColorBtn btn btn-danger btn-sm text-white">Delete</button>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).on('click','.updateProductColorBtn',function () {
                var product_id = "<?php echo e($product->id); ?>";
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quality\resources\views/admin/products/edit.blade.php ENDPATH**/ ?>