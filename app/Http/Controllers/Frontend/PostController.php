<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Interest;
use App\Models\Post;
use App\Models\Userpackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function showPost($id)
    {
        $postproperty = Post::find($id);

        return view('frontend.master', compact('postproperty'));
    }


    public function postdetails($id)
    {
        $postdetail = Post::find($id);
        if (Auth::guard('user')->check()) {
            $checkPost = Interest::where('userId', auth('user')->user()->id)->where('postId', $id)->first();
            return view('frontend.layouts.postdetail', compact('postdetail', 'checkPost'));
        } else {
            return view('frontend.layouts.postdetail', compact('postdetail'));
        }

    }

    public function interested($id)
    {
        $getAuthorId=Post::find($id);



        Interest::create([
            'postId' => $id,
            'userId' => auth('user')->user()->id,
            'postAuthorId'=>$getAuthorId->authorId,
            'userContact'=>auth('user')->user()->contact


        ]);
        return redirect()->back();
    }

    public function interestedPosts()
    {
        $allpost = Post::all();
        $interestedPosts = Interest::with('interestPosts')->
        where('userId', auth('user')->user()->id)->
        orderBy('created_at','DESC')
//            ->where('status','Disapproved')
//            ->orWhere('status','pending')
            ->paginate('3');

        $interestedPost=Interest::with('interestPosts')->
        where('userId', auth('user')->user()->id)->
        where('status','Disapproved')->
        orderBy('created_at','DESC')->
        paginate('3');

        $interestedPo=Interest::with('interestPosts')->
        where('userId', auth('user')->user()->id)->
        where('status','Approved')->
        orderBy('created_at','DESC')->
        paginate('5');


        return view('frontend.layouts.interest.interested', compact('interestedPosts','interestedPost','interestedPo','allpost'));
    }


    public function viewInterestedUsers()
    {
        $interestedUsers=Interest::with('userinterest','postInterest')->where('postAuthorId',auth('user')->user()->id)->where('status','pending')->get();
        $approvedUsers=Interest::with('userinterest','postInterest')->where('postAuthorId',auth('user')->user()->id)->where('status','Approved')->get();
        $disapprovedUsers=Interest::with('userinterest','postInterest')->where('postAuthorId',auth('user')->user()->id)->where('status','Disapproved')->get();

        return view('frontend.layouts.interest.interestedUserList',compact('interestedUsers','approvedUsers','disapprovedUsers'));

    }


    public function approve($id,$action)
    {
        $stringName=$action;

        switch ($stringName){


            case 'approve':
                $approve=Interest::find($id);
                $approve->update([


                    'status'=>'Approved',
                    'postAuthorContact'=>auth('user')->user()->contact

                ]);
                return redirect()->back();
                break;
            case 'disapprove':
                $approve=Interest::find($id);
                $approve->update([


                    'status'=>'Disapproved'

                ]);
                return redirect()->back();
                break;


        }

    }


//user
    public function deleteRequest($id)
    {
        $deleteRequest= Interest::find($id);
        $deleteRequest->delete();
        return redirect()->back()->with('success','Request deleted successfully');
    }




    public function postall()
    {
        $allpost = Post::all();
        return view('frontend.layouts.postpage', compact('allpost'));
    }

    public function userSubmitPostForm()
    {
        $checkPackage = Userpackage::where('userId', auth('user')->user()->id)->where('status', 'Approved')->get();
        $category = Category::all();
        $isExist = !auth('user')->user()->userpackages()->where('current_package_status', 'active')->exists();
        return view('frontend.layouts.userform.usersubmitpost', compact('category','isExist'));
    }

    public function userPost(Request $request)

    {
        $check=Userpackage::where('userId',auth('user')->user()->id)->where('current_package_status','active')->where('numberOfPosts','>',0)->first();
        //$package_count = auth('user')->user()->userpackages()->where('current_package_status', 'active')->where('numberOfPosts', '>=', 0)->first();


        if ($check == null) {

            return redirect()->back()->with('success', 'You do not have any posts left to do. Please purchase a package');
        } else {

            $image = [];


            if ($request->hasFile('image')) {
                $files = $request->file('image');

                foreach ($files as $key=> $file){

                    if ($file->isValid()) {

                        $file_name= date('Ymdhms').$key . '.' . $file->getClientOriginalExtension();

                        $file->storeAs('posts', $file_name);
                        $image[] = $file_name;


                    }
                }

            }

           $imageDoc = [];


            if ($request->hasFile('imageDoc')) {
                $files = $request->file('imageDoc');

                foreach ($files as $key=> $file){

                    if ($file->isValid()) {

                        $file_name_new= date('Ymdhms').$key . '.' . $file->getClientOriginalExtension();

                        $file->storeAs('documents', $file_name_new);
                        $imageDoc[] =  $file_name_new;


                    }
                }

            }
            $post = Post::create([
                'title' => $request->posttitle,
                'categoryId' => $request->categoryId,
                'price' => $request->price,
                'region' => $request->region,
                'sector' => $request->sector,
                'road' => $request->road,
                'plot' => $request->plot,
                'description' => $request->description,
                'image' => $image,
                'imageDoc' => $imageDoc,
                'authorId' => auth('user')->user()->id,
                'authorName' => auth('user')->user()->name,
                'authorRole' => auth('user')->user()->role,
                'expire_at' => now()->addMonth()
            ]);
            $check->decrement('numberOfPosts');
            return redirect()->route('user.submit.post.view');
        }
    }

    public function userSubmitPostView()
    {


        $posts = Post::where('authorId', auth('user')->user()->id)->where('authorRole', auth('user')->user()->role)->get();
        return view('frontend.layouts.userform.userpost', compact('posts'));

    }
}


