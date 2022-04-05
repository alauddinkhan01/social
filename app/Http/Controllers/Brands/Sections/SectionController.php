<?php

namespace App\Http\Controllers\Brands\Sections;

use App\Models\Brand\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Brand\Section\Section;

class SectionController extends Controller
{
    public function sections($id)
    {
        $brand=Brand::find($id);
        return view('brands.sections.section',compact('brand','brand'));
    }
    public function newsections()
    {
        $brand=Brand::all();
        return view('brands.sections.addsection',compact('brand','brand'));
    }
    public function addsection(Request $request)
    {
        // dd($request);
        $section=new Section();
        $file=$request->file('image');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('section',$filename);
        $section->image=$filename;
        $section->status=$request->status;
        $section->section=$request->section;
        $section->brand_id=$request->brand_id;
        $section->save();
        return redirect()->route('brands')->with('addsection','Section has been added successfully!');
    }
    public function editsection($id)
    {
        $section=Section::find($id);
        $brand=Brand::all();
        return view('brands.sections.updatesection',compact(['section','brand']));
    }
    public function updatesection(Request $request,$id)
    {
        $section=Section::find($id);
        if ($request->file('image')) 
        {
            $destination='section/'.$request->image;
            if (File::Exists($destination)) 
            {
                File::delete($destination);
            }
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('section',$filename);
            $section->image=$filename;
        }
        $section->status=$request->status;
        $section->section=$request->section;
        $section->brand_id=$request->brand_id;
        $section->save();
        return redirect()->route('brands')->with('updatesection','Section has been updated successfully!');
    }
    public function deletesection($id)
    {
        $section=Section::find($id);
        $section->delete();
        return redirect()->route('brands')->with('deletesection','Section has been deleted successfully!');
    }
}
