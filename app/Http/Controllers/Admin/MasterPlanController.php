<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MasterPlan;

use Auth;
class MasterPlanController extends Controller
{
    public function index()
    {
        $masterplans = MasterPlan::get();
        return view('admin.masterplan.index', compact('masterplans'));
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $masterplan = New MasterPlan();
        $masterplan->title = $request->title;

        if ($request->hasFile('image')){
            $file = 'masterplan-'.time().'.'.$request->image->extension();
            $request->image->storeAs('/masterplan/', $file, 'my_files');
            $masterplan->image = $file;
        }

        

        $masterplan->save();
        return redirect('/admin/masterplan')->with('flash_message_success','MasterPlan Create Successfuly...');

    }


    

    public function update(Request $request, $id)
    {

        $masterplan = MasterPlan::find($id);
        $masterplan->title = $request->title;

        if ($request->hasFile('image')){
            $file = 'masterplan-'.time().'.'.$request->image->extension();
            $request->image->storeAs('/masterplan/', $file, 'my_files');
            $masterplan->image = $file;
        }
        else
        {
            $masterplan->image = $masterplan->image;
        }

        

        $masterplan->save();
        return redirect('/admin/masterplan')->with('flash_message_success','MasterPlan Update Successfuly...');

    }



    public function delete($id)
    {
        $masterplan = MasterPlan::find($id);
        if (!empty($masterplan->image))
        {
            $path = app_path('backend/masterplan/'.$masterplan->image);
            if (file_exists($path)) { unlink($path);}
        }
        
        // dd($path);

        MasterPlan::find($id)->delete();
        return redirect()->back()->with('flash_message_success','MasterPlan Delete Successfuly...');
    }
}
