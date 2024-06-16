<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategorySaveRequest;
use App\Models\category;
use Illuminate\Http\Request;

class CategoryController
{

  public function category(){
    $categories = category::all();
 return view ('categorylist',compact('categories'));
 }

 public function addcategory(){
    return view('Addcategory');
 }
 public function savecategory(CategorySaveRequest $request){
        $input = $request->validated();
        category::create($input);
        return redirect()->route('category')->with('message','category saved successfully');

         }

         public function deletecategory($id){
            $category = category::find(decrypt($id));
             $category->delete();
             return redirect()->route('category')->with('message','category Deleted successfully');
         }
         public function editcategory($id){
            $category = category::find(decrypt($id));
            return view('editcategory',compact('category'));
        }
        public function updatecategory(categorySaveRequest $request){
            $input = $request->validated();
            $category = category::find(decrypt($request->category_id));
            $category->update($input);
            return redirect()->route('category')->with('message','Category updated successfully');
        }

}
