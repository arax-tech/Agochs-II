<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Facilitie;
use App\MasterPlan;
use App\Project;
use App\Slider;
use App\Blog;
use App\Media;
use DB;

class FrontController extends Controller
{
    public function home()
    {
        $projects = Project::get();
        $sliders = Slider::orderBy('id', 'DESC')->get();
        $blogs = Blog::orderBy('id', 'DESC')->get();
        $facilities = Facilitie::get();
        return view('home', compact('sliders', 'projects', 'blogs', 'facilities'));
    }

    public function request(Request $request)
    {   
        $details = [
            'name' => $request->name,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ];
           
        Mail::to('7skyhrdepartment@gmail.com')->send(new \App\Mail\Request($details));
        return redirect()->back()->with('flash_message_success', 'Thank you for your request we will get back to you asap...');
    }
    public function about()
    {
        return view('about');
    }
    public function projects()
    {
        $projects = Project::paginate(12);
        return view('projects', compact('projects'));
    }
    public function project_detail($title)
    {
        error_reporting(0);
        $project = Project::where('title',$title)->first();
        $reletedProjects = Project::inRandomOrder()->limit(5)->where('category', $project->category)->get();
        $latestBlogs = Blog::orderBy('id', 'DESC')->limit(4)->get();
        return view('project_detail', compact('project', 'reletedProjects', 'latestBlogs'));
    }
    public function masterplan()
    {
        $masterplans = MasterPlan::paginate(12);
        return view('masterplan',compact('masterplans'));
    }
    public function facilities()
    {
        $facilities = Facilitie::paginate(12);
        return view('facilities', compact('facilities'));
    }
    public function faqs()
    {
        return view('faqs');
    }
    public function media()
    {
        $medias = Media::orderBy('id', 'DESC')->paginate(12);
        return view('media', compact('medias'));
    }
    public function blogs()
    {
        $blogs = Blog::orderBy('id', 'DESC')->paginate(12);
        return view('blogs', compact('blogs'));
    }
    public function blog_detail($title)
    {
        error_reporting(0);
        $blog = Blog::where('title',$title)->first();

        $reletedBlogs = Blog::limit(2)->where('id', '!=' , $blog->id)->where('category', $blog->category)->get();
        $latestBlogs = Blog::orderBy('id', 'DESC')->limit(8)->get();
        return view('blog_detail', compact('blog', 'reletedBlogs', 'latestBlogs'));
    }
    public function contact()
    {
    	return view('contact');
    }
}
