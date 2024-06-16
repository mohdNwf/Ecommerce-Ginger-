<?php

namespace App\Http\Controllers;

use App\Http\Requests\BannerSaveRequest;
use App\Models\Banner;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Log;

class bannerController
{
    public function banner(){
        $banners = banner::all();
        return view('bannerlist',compact('banners'));
    }
    public function addbanner(){
        return view('addbanner');
    }
    public function savebanner(BannerSaveRequest $request){
        $input = $request->validated();
        if($request->hasFile('image')){
            $extension = $request->image->extension();
            $filename = Str::random(6)."_".time()."_product.".$extension;
            $request->image->storeAs('images',$filename);
            $input['image'] = $filename;
        }
        Banner::create($input);
        return redirect()->route('banner')->with('message','Banner saved successfully');

         }
         public function editbanner($id){
            $banner = banner::find(decrypt($id));
            $banners = banner::all();
            return view('editbanner',compact('banner','banners'));
        }

public function updatebanner(BannerSaveRequest $request)
{

        $bannerId = decrypt($request->input('banner_id'));
        $banner = Banner::findOrFail($bannerId);
        $input = $request->validated();
        if ($request->hasFile('image')) {
            if ($banner->image) {
                Storage::delete('images/' . $banner->image);
            }
            $extension = $request->image->extension();
            $filename = Str::random(6) . "_" . time() . "_product." . $extension;
            $request->image->storeAs('images', $filename);
            $input['image'] = $filename;
        }
        $banner->update($input);
        return redirect()->route('banner')->with('message', 'Banner updated successfully');

}
public function deletebanner($id){
    $category = banner::find(decrypt($id));
     $category->delete();
     return redirect()->route('banner')->with('message','category Deleted successfully');
 }


}
