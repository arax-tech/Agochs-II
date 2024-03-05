<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
    	if (Auth::check()) {
            return redirect('/admin/dashboard');
    		
    	}
        if ($request->isMethod("POST"))
    	{
            
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
            {
                return redirect('/admin/dashboard')->with('flash_message_success', 'Welcome '.auth::user()->name.' !');
            }
            else
            {
                return redirect()->back()->with('flash_message_error', 'Invalid Email OR Password, Please try Again...');
            }    		
    	}
        
    	return view('login');
    }
}
