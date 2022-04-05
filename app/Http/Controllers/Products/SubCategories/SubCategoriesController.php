<?php

namespace App\Http\Controllers\Products\SubCategories;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\SubCategory\SubCategory;

class SubCategoriesController extends Controller
{
 
    public function subcategories($id)
    {
        $subcategories=Category::find($id);
        return view('products.subcategories.subcategories',compact('subcategories','subcategories'));
    }
    public function newsubcategory()
    {
        $category=Category::all('id','category');
        return view('products.subcategories.addsubcategory',compact('category','category'));
    }
    public function addsubcategory(Request $request)
    {
        $subcategories= new SubCategory();
        $file=$request->file('image');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('subcategory',$filename);
        $subcategories->subcategory=$request->subcategory;
        $subcategories->status=$request->status;
        $subcategories->image=$filename;
        $subcategories->category_id=$request->category_id;
        $subcategories->save();
        return redirect()->route('categories')->with('add','Sub category added successfully');
    }
    // public function senddata()
    // {
    //     $category=Category::all();
    //     return view('products.subcategories.updatesubcategories',compact('category','category'));
    // }
    public function editsubcategory($id)
    {
        $subcategory=SubCategory::find($id);
        $category=Category::all();
        return view('products.subcategories.updatesubcategories',compact(['subcategory','category']));
    }
    public function updatesubcategory(Request $request,$id)
    {
        $subcategory=SubCategory::find($id);
        if ($request->file('image')) 
        {
            $destination='subcategory/'.$subcategory->image;
            if (File::Exists($destination)) 
            {
                File::delete($destination);
            }
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('subcategory',$filename);
            $subcategory->image=$filename;
        }
        $subcategory->subcategory=$request->subcategory;
        $subcategory->status=$request->status;
        $subcategory->category_id=$request->category_id;
        $subcategory->save();
        return redirect()->route('categories')->with('update','Sub category updated successfully');
    }
    public function deletesubcategory($id)
    {
        $deletesubcategory=SubCategory::find($id);
        $deletesubcategory->delete();
        return redirect()->route('categories')->with('delete','Sub category deleted successfully');
    }
}

