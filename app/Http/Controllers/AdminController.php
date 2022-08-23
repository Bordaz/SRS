<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //
 
     public function AdminloginAuth(Request $request){

     $request->validate([
            'email'=>'required',
            'password' => 'required'
        ]);
       
           if(Auth::guard('admin')->attempt($request->only(['email' ,'password'])))
        {          
           return redirect("/home");
        }
        return back()->with('fail', 'Incorrect user credentials.');
    }

    public function AdminDashboard()
    {
       
          $admin = Auth::guard('admin')->user();
          
         return view('layout.admin_layout', compact('admin'));
    }
    public function AdminProfile()
    {
       
          $admin = Auth::guard('admin')->user();

          
         return view('admin.admin_profile', compact('admin'));
    }


    function CreateAdmin(Request $request){
        // for inserting data to db 
     //   return $req->input();
     $ad_user = new Admin;
     $ad_user->email=$request->input('email');
     $ad_user->password=Hash::make($request->input('password'));
     $ad_user->dp = $request->dp;
     if($request->hasfile('dp'))
     {
         $file = $request->file('dp');
         $extension = $file->getClientOriginalExtension();
         $filename = time().'.'.$extension;
         $file->move('uploads/images/',$filename);
         $ad_user->dp = $filename;

     }
         $res = $ad_user->save();
         if($res)
    {
         return back()->with('success', 'Admin Account Created Successful');
    }
     else
      {
          return back()->with('fail', 'Admin Account creation not Successful');
      }
    
    }

   
    public function deleteAdmin(){
        $admin = Admin::paginate(5);
        return view('admin.admin_delete', compact('admin'));
    }

    

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return view('admin.admin_login');
    }
    public function addAdmin(){
        return view('admin.admin_create');
    }

    public function home(){
        return view('admin.admin_profile');
    }
    public function admin_profile(){
        return view('admin.admin_profile');
    }
    public function student_list(){
        return view('admin.student_list');
    }
    public function editstudent(){
        return view('admin.student_edit');
    }
            
}
