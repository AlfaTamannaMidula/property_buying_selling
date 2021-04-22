<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use \App\Models\Post;

class PostController extends Controller
{
    public function viewpost()
    {
        $title="Post List";
        $post=Post::all();
        return view('backend.layouts.post.listpost',compact('post','title'));
    }
    public function postform(){
        $category=Category::all();
        $title="Post Form";
        return view('backend.layouts.post.addpost',compact('title','category'));
    }



public function addpost(Request $request){


    $file_name='';
    //step 1 check if request has file
    if($request->hasFile('image'))
    {
        //file valid or not
        $file=$request->file('image');
        if($file->isValid())
        {
            //generate file name
            $file_name=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            //store into local directory
            $file->storeAs('post',$file_name);
        }
    }
        $post=Post::create([
            'title'=>$request->posttitle,
            'description'=>$request->description,
            'image'=>$file_name,
            'price'=>$request->price,
            'region'=>$request->region,
            'sector'=>$request->sector,
            'road'=>$request->road,
            'plot'=>$request->plot,
            'categoryId'=>$request->categoryId,
            'status'=>$request->status

        ]);
 return redirect()->route('post.view');
}
    public function deletepost($id)
    {
//        first get the product
        $post=post::find($id);
        //then delete it
        $post->delete();

//        Product::where('id',$id)->delete();
        return redirect()->back()->with('success','Post Deleted Successfully.');



    }

}
