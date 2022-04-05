<?php

namespace App\Http\Controllers\Products\Categories;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\CategoryMail;
use App\Mail\UpdateCategory;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

class CategoriesController extends Controller
{
    public function categories()
    {
        $categories=Category::all();
        return view('products.categories.categories',compact("categories","categories"));
    }
    public function newcategory()
    {
        return view('products.categories.addcategory');
    }
    public function addcategory(Request $request)
    {
        $file=$request->file("image");
        $extension=$file->getClientOriginalExtension();
        $filename=time().".".$extension;
        $file->move('category',$filename);
        $category=new Category();
        $category->category=$request->category;
        $category->image=$filename;
        $category->status=$request->status;
        $category->save();
        // Mail::to('ever101shinestar@gmail.com')->send(new CategoryMail($category));
        return redirect()->route('categories')->with("addcategory","Category added successfully");
    }
    public function editcategory($id)
    {
        $category=Category::find($id);
        return view('products.categories.updatecategory',compact('category','category'));
    }
    public function updatecategory(Request $request,$id)
    {
        $category=Category::find($id);
        if ($request->file('image')) 
        {
            $destination='category/'.$category->image;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file=$request->file("image");
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('category',$filename);
            $category->image=$filename;
        }
        $category->category=$request->category;
        $category->status=$request->status;
        $category->save();
        // Mail::to('ever101shinestar@gmail.com')->send(new UpdateCategory($category));
        return redirect()->route('categories')->with("update","Category updated successfully");
    }
    public function deletecategory($id)
    {
        $category=Category::find($id);
        $category->delete();
        return redirect()->route('categories')->with("delete","Category deleted successfully");
    }
}
