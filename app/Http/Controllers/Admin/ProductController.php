<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;


use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Str;
use App\Http\Requests\ProductFormRequest;
use App\Models\ProductColor;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index',compact('products'));
    }
    public function create()
    {
        $categories = Category::all();
        $colors = Color::where('status','0')->get();
        return view('admin.products.create' ,compact('categories','colors'));
    }
    public function store(ProductFormRequest $request)
    {
        $validateData = $request->validated();

        $category = Category::findOrFail($validateData['category_id']);

        $product = $category->products()->create([
            'category_id' => $validateData['category_id'],
            'name' => $validateData['name'],
            'slug' => Str::slug($validateData['slug']),
            'small_description' => $validateData['small_description'],
            'description' => $validateData['description'],
            'original_price' => $validateData['original_price'],
            'selling_price' => $validateData['selling_price'],
            'quantity' => $validateData['quantity'],
            'trending' => $request->trending == true ?'1':'0',
            'status' => $request->status == true ?'1':'0',
            'featured' => $request->featured == true ?'1':'0',
            'meta_title' => $validateData['meta_title'],
            'meta_keyword' => $validateData['meta_keyword'],
            'meta_description' => $validateData['meta_description'],
        ]);
        if ($request->hasFile('image')) {
            
            $uploadPath = 'uploads/products/';

            $i = 1 ;
            foreach ($request->file('image') as $imageFile) {
                $ext = $imageFile->getClientOriginalExtension();
                $filename = time().$i++.'.'.$ext;
                $imageFile->move($uploadPath, $filename);
                $finalImagePathName = $uploadPath.$filename;

                $product->productImage()->create([
                    'product_id' => $product->id,
                    'image' => $finalImagePathName,
                ]);
            }
        }
        if ($request->colors) {
            foreach($request->colors as $key => $color){
                $product->productColors()->create([
                    'product_id' => $product->id,
                    'color_id' => $color,
                    'quantity' => $request->colorquantity[$key] ?? 0
                ]);
            }
        }
        
        return redirect('admin/products')->with('message','Produst Added Successfully');
    }
    public function edit(int $product_id)
    {
        $categories = Category::all();
        $product = Product::findOrFail($product_id);
        $product_color = $product->productColors->pluck('color_id')->toArray();
        $colors = Color::whereNotIn('id',$product_color)->get();
        return view('admin.products.edit',compact('categories','product','colors'));
    }
    public function update(ProductFormRequest $request , int $product_id )
    {
        $validateData = $request->validated();
        $product = Category::findOrFail($validateData['category_id'])
                    ->products()->where('id',$product_id)->first();

        if ($product ) 
        {
            $product->update([
                'category_id' => $validateData['category_id'],
                'name' => $validateData['name'],
                'slug' => Str::slug($validateData['slug']),
                'small_description' => $validateData['small_description'],
                'description' => $validateData['description'],
                'original_price' => $validateData['original_price'],
                'selling_price' => $validateData['selling_price'],
                'quantity' => $validateData['quantity'],
                'trending' => $request->trending == true ?'1':'0',
                'status' => $request->status == true ?'1':'0',
                'featured' => $request->featured == true ?'1':'0',
                'meta_title' => $validateData['meta_title'],
                'meta_keyword' => $validateData['meta_keyword'],
                'meta_description' => $validateData['meta_description'],
            ]);

            if ($request->hasFile('image')) {
                $uploadPath = 'uploads/products/';
                $i = 1 ;
                foreach ($request->file('image') as $imageFile) {
                    $ext = $imageFile->getClientOriginalExtension();
                    $filename = time().$i++.'.'.$ext;
                    $imageFile->move($uploadPath, $filename);
                    $finalImagePathName = $uploadPath.$filename;
                    $product->productImage()->create([
                        'product_id' => $product->id,
                        'image' => $finalImagePathName,
                    ]);
                }
            }

            if ($request->colors) {
                foreach($request->colors as $key => $color){
                    $product->productColors()->create([
                        'product_id' => $product->id,
                        'color_id' => $color,
                        'quantity' => $request->colorquantity[$key] ?? 0
                    ]);
                }
            }
            
            return redirect('/admin/products')->with('message','Produst Updated Successfully');
        }
        else 
        {
            redirect('admin/products')->with('message','No Such Product Id Found');
        }
    }
    public function destroyImage(int $product_image_id)
    {
        $productImage = ProductImage::findOrFail($product_image_id);
        if (File::exists($productImage->image))
        {
            File::delete($productImage->image);
        }
        $productImage->delete();
        return redirect()->back()->with('message','Product Image Deleted');
    }
    public function destroy(int $product_id)
    {
        $product = Product::findOrFail($product_id);
        if ($product ->productImage()) {
            foreach ($product ->productImage() as $image) {
               if (File::exists($image->image)) {
                 File::delete($image->image);
               }
            }
        }
        $product->delete();
        return redirect()->back()->with('message','Produst Deleted Successfully');
    }
    public function updateProdColorQty(Request $request, $prod_color_id
    )
    {
        $productColorData = Product::findOrFail($request->product_id)
                            ->productColors()->where('id',$prod_color_id)->first();
        $productColorData->update([
            'quantity'=>$request->qty,
        ]);
        return response()->json(['message'=>'Product Color Quantity Updated']);
    }
    public function deleteProdColorQty($prod_color_id)
    {
        $productColor = ProductColor::findOrFail($prod_color_id);
        $productColor->delete();
        return response()->json(['message'=>'Product Color  Deleted']);
    }
}
