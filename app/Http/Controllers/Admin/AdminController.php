<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function profile(Request $request)
    {
        if ($request->isMethod("POST"))
        {
            // dd($request->all());
            $admin = User::find(auth::user()->id);
            $admin->name = $request->name;
            $admin->email = $request->email;

            if ($request->hasFile('profile')){
                $file1 = 'admin-'.time().'.'.$request->profile->extension();
                $request->profile->storeAs('/profile/', $file1, 'my_files');
                $admin->image = $file1;
            }else{
                $admin->image = $admin->image;
            }
            $admin->save();
            return redirect()->back()->with('flash_message_success','Profile Updated Successfuly...');
        }
        return view('admin.profile');
    }

    public function logout()
    {
    	Auth::logout();
        return redirect('/login')->with('flash_message_success','Logout Successfully...');
    }
}
