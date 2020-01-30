<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Blog;
use App\Team;
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

public function viewBlogs()
    {
        $blogs = Blog::all();;
    
        return view('viewblogs',compact('blogs'));
}

public function deleteBlog($blog_id){
        Blog::where('id',$blog_id)->delete();

        return redirect('/admin')->with('response','Blog deleted  successfully');
}

public function editBlog(Request $request,$blog_id){

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
        $data = array(
            "user_id"=>$blog->user_id,
            "blog_title"=>$blog->user_id,
            "image_Url"=>$blog->image_Url,
            "story"=>$blog->story
        );
        Blog::where('id',$blog_id)->update($data);
        $blog->update();
       return redirect('/admin')->with('response','Blog Edited  successfully');

 return $blog_id;



}

public function viewEditBlog($blog_id)
    {
        $blog = Blog::find($blog_id);
        return view('editblog',compact('blog'));
}



public function view($blog_id){
        $blog = Blog::find($blog_id);
        return view('blogview',compact('blog'));
}



public function createTeam(){
    return view('createTeam');
}


public function addTeam(Request $request)
    {

        $this->validate($request, [
            "name"=>"required",
            "title"=>"required",
            "image_url" => "required",
            "story"=>"required"
            
        ]);
           
            $team = new Team;
            $team->user_id = Auth::user()->id;
            $team->name = $request->input('name');
            $team->title = $request->input('title');
            $team->image_Url = $request->input('image_url');
            $team->story = $request->input('story');
            $team->save();
            
           return redirect('/admin')->with('response','Member Added successfully');
}

public function viewTeams()
    {
        $teams = Team::all();;
    
        return view('viewTeams',compact('teams'));
}

}