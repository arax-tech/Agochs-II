<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Media;

use Auth;
class MediaController extends Controller
{
    public function index()
    {
        $medias = Media::get();
        return view('admin.media.index', compact('medias'));
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $media = New Media();
        $media->title = $request->title;

        if ($request->hasFile('image')){
            $file = 'media-'.time().'.'.$request->image->extension();
            $request->image->storeAs('/media/', $file, 'my_files');
            $media->image = $file;
        }

        

        $media->save();
        return redirect('/admin/media')->with('flash_message_success','Media Create Successfuly...');

    }


    

    public function update(Request $request, $id)
    {

        $media = Media::find($id);
        $media->title = $request->title;

        if ($request->hasFile('image')){
            $file = 'media-'.time().'.'.$request->image->extension();
            $request->image->storeAs('/media/', $file, 'my_files');
            $media->image = $file;
        }
        else
        {
            $media->image = $media->image;
        }

        

        $media->save();
        return redirect('/admin/media')->with('flash_message_success','Media Update Successfuly...');

    }



    public function delete($id)
    {
        $media = Media::find($id);
        if (!empty($media->image))
        {
            $path = app_path('backend/media/'.$media->image);
            if (file_exists($path)) { unlink($path);}
        }
        
        // dd($path);

        Media::find($id)->delete();
        return redirect()->back()->with('flash_message_success','Media Delete Successfuly...');
    }
}
