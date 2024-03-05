<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Project;
use App\Slider;

use Auth;
class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::get();
        return view('admin.project.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.project.create');
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $project = New Project();
        $project->title = $request->title;
        $project->category = $request->category;
        $project->location = $request->location;
        $project->description = $request->description;

        if ($request->hasFile('image')){
            $file = 'project-'.time().'.'.$request->image->extension();
            $request->image->storeAs('/project/', $file, 'my_files');
            $project->images = $file;
        }


        // $images = [];
        // if ($request->file('images')) {            
        //     foreach ($request->file('images') as $key => $image) {
        //         $file = 'project-'.time().$key.'.'.$image->extension();
        //         $image->storeAs('/project/', $file, 'my_files');
        //         $images[] = $file;
        //     }
        //     $project->images = implode(",", $images);
        // }
        $project->save();
        return redirect('/admin/project')->with('flash_message_success','Project Create Successfuly...');

    }


    public function edit($id)
    {
        $project = Project::find($id);
        return view('admin.project.update', compact('project'));
    }
    

    public function update(Request $request, $id)
    {

        // dd($request->all());
        $project = Project::find($id);
        $project->title = $request->title;
        $project->category = $request->category;
        $project->location = $request->location;
        $project->description = $request->description;


        if ($request->hasFile('image')){
            $file = 'project-'.time().'.'.$request->image->extension();
            $request->image->storeAs('/project/', $file, 'my_files');
            $project->images = $file;
        }else{
            $project->images = $project->images;
        }

        $project->save();
        return redirect('/admin/project')->with('flash_message_success','Project Create Successfuly...');

    }



    public function delete($id)
    {
        $project = Project::find($id);
        $images = explode(",", $project->images);

        foreach ($images as $key => $image) {
            $path = app_path('backend/project/'.$image);
            if (file_exists($path)) { unlink($path);}
        }
        
        
        // dd($path);

        Project::find($id)->delete();
        return redirect()->back()->with('flash_message_success','Project Delete Successfuly...');
    }
}
