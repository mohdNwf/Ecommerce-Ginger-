<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarouselSaveRequest;
use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class CarouselController
{
    public function carousel(){
      $carousels = carousel::all();
return view ('carousellist',compact('carousels'));
    }
    public function addcarousel(){
        return view ('addcarousel');
            }


            public function savecarousel(CarouselSaveRequest $request){
                $input = $request->validated();
                if($request->hasFile('image')){
                    $extension = $request->image->extension();
                    $filename = Str::random(6)."_".time()."_product.".$extension;
                    $request->image->storeAs('images',$filename);
                    $input['image'] = $filename;
                }
                Carousel::create($input);
                return redirect()->route('carousel')->with('message','carousel saved successfully');

                 }

                 public function editcarousel($id){
                    $carousel = carousel::find(decrypt($id));
                    $carousels = carousel::all();
                    return view('editcarousel',compact('carousel','carousels'));
                }

    public function updatecarousel(CarouselSaveRequest $request)
{

        $carousel_id = decrypt($request->input('carousel_id'));
        $carousel = carousel::findOrFail($carousel_id);
        $input = $request->validated();
        if ($request->hasFile('image')) {
            if ($carousel->image) {
                Storage::delete('images/' . $carousel->image);
            }
            $extension = $request->image->extension();
            $filename = Str::random(6) . "_" . time() . "_product." . $extension;
            $request->image->storeAs('images', $filename);
            $input['image'] = $filename;
        }
        $carousel->update($input);
        return redirect()->route('carousel')->with('message', 'carousel updated successfully');

}

public function deletecarousel($id){
    $carousel = carousel::find(decrypt($id));
     $carousel->delete();
     return redirect()->route('carousel')->with('message','carousel Deleted successfully');
 }

 }
