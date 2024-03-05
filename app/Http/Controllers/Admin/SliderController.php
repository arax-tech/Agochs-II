<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;

use Auth;
class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::get();
        return view('admin.slider.index', compact('sliders'));
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $slider = New Slider();
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->allignments = $request->allignments;

        if ($request->hasFile('image')){
            $file = 'slider-'.time().'.'.$request->image->extension();
            $request->image->storeAs('/slider/', $file, 'my_files');
            $slider->image = $file;
        }

        

        $slider->save();
        return redirect('/admin/slider')->with('flash_message_success','Slider Create Successfuly...');

    }


    

    public function update(Request $request, $id)
    {

        $slider = Slider::find($id);
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->allignments = $request->allignments;

        if ($request->hasFile('image')){
            $file = 'slider-'.time().'.'.$request->image->extension();
            $request->image->storeAs('/slider/', $file, 'my_files');
            $slider->image = $file;
        }
        else
        {
            $slider->image = $slider->image;
        }

        

        $slider->save();
        return redirect('/admin/slider')->with('flash_message_success','Slider Update Successfuly...');

    }



    public function delete($id)
    {
        $slider = Slider::find($id);
        if (!empty($slider->image))
        {
            $path = app_path('backend/slider/'.$slider->image);
            if (file_exists($path)) { unlink($path);}
        }
        
        // dd($path);

        $slider = Slider::find($id)->delete();
        return redirect()->back()->with('flash_message_success','Slider Delete Successfuly...');
    }
}
