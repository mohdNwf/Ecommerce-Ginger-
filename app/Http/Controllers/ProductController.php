<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductSaveRequest;
use App\Models\Banner;
use App\Models\Carousel;
use App\Models\cart;
use App\Models\category;
use App\Models\product;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController
{
 public function product(){
    $products = product::latest()->get();
 return view ('list',compact('products'));
 }
 public function create(){
    $categories = category::all();
 return view ('create',compact('categories'));
 }

 public function save(ProductSaveRequest $request){
$input = $request->validated();
if($request->hasFile('image')){
    $extension = $request->image->extension();
    $filename = Str::random(6)."_".time()."_product.".$extension;
    $request->image->storeAs('images',$filename);
    $input['image'] = $filename;
}
product::create($input);
return redirect()->route('product')->with('message','Product saved successfully');

 }
 public function delete($id){
    $product = product::find(decrypt($id));
    if(!empty($product)){
        Storage::delete('images/'.$product->image);
    }
     $product->delete();
     return redirect()->route('product')->with('message','Product Deleted successfully');
 }
 public function edit($id){
    $product = product::find(decrypt($id));    $categories = category::all();
    $categories = category::all();
    return view('edit',compact('product','categories'));
}
 public function update(ProductSaveRequest $request){
    $input = $request->validated();
    $product = product::find(decrypt($request->product_id));
    if($request->hasFile('image')){
    Storage::delete('images/'.$product->image);
    $extension = $request->image->extension();
    $filename = Str::random(6)."_".time()."_product.".$extension;
    $request->image->storeAs('images',$filename);
    $input['image'] = $filename;

}
 $product->update($input);
 return redirect()->route('product')->with('message','Product Updated successfully');

}
public function pastel()
{
    $products = Product::limit(8)->get();
    $banners = Banner::limit(2)->get();
    $newest = product::limit(3)->latest()->get();
    $carouselItems = Carousel::all();
    return view('pastel', compact('products','banners','newest','carouselItems'));
}

public function selectcategory($category_id)
{
      $products = Product::with('category')->where('category_id', $category_id)->limit(8)->get();
      $banners = Banner::limit(2)->get();
      $newest = product::limit(3)->latest()->get();
      $carouselItems = Carousel::all();
      return view('pastel', compact('products','banners','newest','carouselItems'));
       }
public function all()
{

    $products = Product::all()->shuffle()->take(8);
    $banners = Banner::limit(2)->get();
    $newest = product::limit(3)->latest()->get();
    $carouselItems = Carousel::all();
    return view('pastel', compact('products','banners','newest','carouselItems'));
}
public function showBanner()
{
    $banners = Banner::limit(2)->get();
    return view('pastel', compact('banners'));
}


public function showCarousel()
{
    $carouselItems = Carousel::all();
    return view('pastel', compact('carouselItems'));
}
public function demo(){
    return view('demo');
}
public function productlisting(){
    return view('productlisting');
}
public function Aboutus(){
    return view('Aboutus');
}
public function addCart($id,Request $request){
$product_id = $id;
$user = Auth::user();
$user_id = $user->id;
$data = new cart;
$data->user_id = $user_id;
$data->product_id = $product_id;
$data->save();
return redirect()->back()->with('success', 'Product added to the cart successfully.');

}
public function mycart(){
    $user = Auth::user();
$user_id = $user->id;
$count = cart::where('user_id',$user_id)->count();
$cartItems = cart::where('user_id',$user_id)->get();

return view('mycart',compact('count','cartItems'));
}
}

