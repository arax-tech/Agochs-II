<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Facilitie;
use App\MasterPlan;

use Auth;
class FacilitieController extends Controller
{
    public function index()
    {
        $facilities = Facilitie::get();
        return view('admin.facilities.index', compact('facilities'));
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $facilitie = New Facilitie();
        $facilitie->title = $request->title;
        $facilitie->description = $request->description;

        if ($request->hasFile('image')){
            $file = 'Facilitie-'.time().'.'.$request->image->extension();
            $request->image->storeAs('/facilitie/', $file, 'my_files');
            $facilitie->image = $file;
        }

        

        $facilitie->save();
        return redirect('/admin/facilitie')->with('flash_message_success','Facilitie Create Successfuly...');

    }


    

    public function update(Request $request, $id)
    {

        $facilitie = Facilitie::find($id);
        $facilitie->title = $request->title;
        $facilitie->description = $request->description;

        if ($request->hasFile('image')){
            $file = 'facilitie-'.time().'.'.$request->image->extension();
            $request->image->storeAs('/facilitie/', $file, 'my_files');
            $facilitie->image = $file;
        }
        else
        {
            $facilitie->image = $facilitie->image;
        }

        

        $facilitie->save();
        return redirect('/admin/facilitie')->with('flash_message_success','Facilitie Update Successfuly...');

    }



    public function delete($id)
    {
        $facilitie = Facilitie::find($id);
        if (!empty($facilitie->image))
        {
            $path = app_path('backend/facilitie/'.$facilitie->image);
            if (file_exists($path)) { unlink($path);}
        }
        
        // dd($path);

        Facilitie::find($id)->delete();
        return redirect()->back()->with('flash_message_success','Facilitie Delete Successfuly...');
    }
}
