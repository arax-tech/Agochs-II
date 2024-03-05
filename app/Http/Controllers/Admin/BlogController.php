<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;

use Auth;
class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::get();
        return view('admin.blog.index', compact('blogs'));
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $blog = New Blog();
        $blog->title = $request->title;
        $blog->category = $request->category;
        $blog->author = $request->author;
        $blog->description = $request->description;

        if ($request->hasFile('image')){
            $file = 'blog-'.time().'.'.$request->image->extension();
            $request->image->storeAs('/blog/', $file, 'my_files');
            $blog->image = $file;
        }

        

        $blog->save();
        return redirect('/admin/blog')->with('flash_message_success','Blog Create Successfuly...');

    }


    

    public function update(Request $request, $id)
    {

        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->category = $request->category;
        $blog->author = $request->author;
        $blog->description = $request->description;

        if ($request->hasFile('image')){
            $file = 'blog-'.time().'.'.$request->image->extension();
            $request->image->storeAs('/blog/', $file, 'my_files');
            $blog->image = $file;
        }else{
            $blog->image = $blog->image;
        }

        

        $blog->save();
        return redirect('/admin/blog')->with('flash_message_success','Blog Update Successfuly...');

    }



    public function delete($id)
    {
        $blog = Blog::find($id);
        if (!empty($blog->image))
        {
            $path = app_path('backend/blog/'.$blog->image);
            if (file_exists($path)) { unlink($path);}
        }
        
        // dd($path);

        Blog::find($id)->delete();
        return redirect()->back()->with('flash_message_success','Blog Delete Successfuly...');
    }
}
