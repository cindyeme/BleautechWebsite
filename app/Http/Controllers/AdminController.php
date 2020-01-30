<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Blog;
use Auth;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }
    public function feedback()
    {
        $feedbacks = Contact::all();;
    
        return view('feedback',compact('feedbacks'));
    }

    public function createBlog()
    {
        return view('createBlog');
    }

    public function publishBlog(Request $request)
    {

        $this->validate($request, [
            "blog_title"=>"required",
            "image_url" => "required",
            "story"=>"required"
            
        ]);
           
            $blog = new Blog;
            $blog->user_id = Auth::user()->id;
            $blog->blog_title = $request->input('blog_title');
            $blog->image_Url = $request->input('image_url');
            $blog->story = $request->input('story');
            $blog->save();
            
           return redirect('/admin')->with('response','Published successfully');
    }
}
