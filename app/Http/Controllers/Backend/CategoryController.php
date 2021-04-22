<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function viewcategory()
    {
        $category = Category::all();
        $title = "view category";

        return view('backend.layouts.category.category', compact('category', 'title'));

    }

    public function createcategory(Request $request)
    {

        Category::create([
            'name' => $request->category_name,
            'description' => $request->description,
            'status' => $request->status
        ]);
        return redirect()->back();
    }

    public function deletecategory($id)
    {
//        first get the product
        $category = category::find($id);
        //then delete it
        $category->delete();

//        Product::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Category Deleted Successfully.');

    }
}
