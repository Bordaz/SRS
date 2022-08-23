<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserCourses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    //
   

    public function reg(){
        return view('reg');
    }
    public function regUser(Request $request)
    {
        $request->validate
        (
            [
                'name' => ['required', 'string', 'max:150'],
                'email' => ['required', 'string', 'email', 'max:250', 'unique:users,email'],
                'password' => ['required', 'string', 'max:25'],
                'birthday' => ['required', 'date'],
                'state' => ['required', 'string'],
                'matric' => ['required', 'string'],
                'city' => ['required', 'string'],
                'address' => ['required', 'string'],
                'phone_number' => ['required', 'numeric'],
                'depart' => ['required', 'string'],
                'level' => ['required', 'string'],
                'program' => ['required', 'string'],
                'gender' => ['required', 'string'],
                'relationship' => ['required', 'string'],
                'dp' => ['required', 'image', 'mimes:jpg,png,jpeg'],    
            ]
        );
                $member = new User;
                $member->name=$request->input('name');
                $member->email=$request->input('email');
                $member->password=Hash::make($request->input('password'));
                $member->birthday=$request->input('birthday');
                $member->state=$request->input('state');
                $member->matric=$request->input('matric');
                $member->city=$request->input('city');
                $member->address=$request->input('address');
                $member->phone_number=$request->input('phone_number');
                $member->depart=$request->input('depart');
                $member->level=$request->input('level');
                $member->program=$request->input('program');
                $member->gender=$request->input('gender');
                $member->relationship=$request->input('relationship');
                if($request->hasfile('dp'))
            {
                $file = $request->file('dp');
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move('uploads/images/',$filename);
                $member->dp = $filename;
    
            }
                $res = $member->save();
                if($res)
           {
                return back()->with('success', 'Registration Successful');
           }
            else
             {
                 return back()->with('fail', 'Registration not Successful');
             }
    }
   
    public function loginAuth(Request $request){

     $credentials =  $request->validate([
            'email'=>'required',
            'password' => 'required'
        ]);

           if(!Auth::guard('web')->attempt($credentials))
        {
            return back()->with('fail', 'Incorrect user credentials.');
        }
          
           return redirect("/stu_profile");
    }

    public function studentDashboard()
    {
       
          $user = Auth::guard('web')->user();
       
             
         return view('layout.user_layout', compact('user'));
    }

    public function studentProfile()
    {
       
          $user = Auth::guard('web')->user();
       
       
        
         return view('user_profile', compact('user'));
    }
 

    public function fetchStudent(){
        $student_list = User::paginate(5);
        return view('admin.student_list', compact('student_list'));
    }
    public function editFetchedStudent(){
        $student_edit = User::paginate(5);
        return view('admin.student_edit', compact('student_edit'));
    }

    public function editingFetchedStudent($id){
        $student_edit = User::find($id);
        return view('admin.student_edit', compact('student_edit'));
    }
    public function deleteStudent()
    {
        $student_delete = User::paginate(5);
        return view('admin.student_delete', compact('student_delete'));
    }
    public function deleteFetchedStudent(Request $request, $id)
    {
        User::find($id)->delete();
        
        return back()->with('status','Student Data Successfully Deleted');
    }
    public function updateStudent(Request $request, $id)
    {
      $student_data = User::find($id);
      $student_data->name = $request->name;
      $student_data->email = $request->email;
      $student_data->birthday = $request->birthday;
      $student_data->state = $request->state;
      $student_data->city = $request->city;
      $student_data->address = $request->address;
      $student_data->phone_number = $request->phone_number;
      $student_data->level = $request->level;
      $student_data->program = $request->program;
      $student_data->gender = $request->gender;
      $student_data->relationship = $request->relationship;
      
      $student_data->save();
      return back()->with('status', 'Student Data Updated successfully');
    }

    public function getEditPage(Request $request, $id){
        $student  = User::find($id);
        return view('admin.student_editing', compact('student'));
    }
     

    public function logoutUser(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }



public function ViewSubmitted(){


    $user = Auth::guard('web')->user();
    
    $user_courses = UserCourses::with(['course','user'])->where('user_id',$user->id)->get();
    dd($user_courses->courses());
       
        
    return view('view_registered', compact('user'));

}














    public function Wc(){
        // next line for fetching 
        $view_student  = User::where('depart', 'Computer Science')->get();    
        return view('department.wc', compact('view_student'));
    }

    public function ViewComFT(){
        // next line for fetching 
        $view_student  = User::where('level', 'Nd1')->where('depart', 'Computer Science')->get();    
        return view('department.com-sci-nd1ft', compact('view_student'));
    }

    public function ViewCom2(){
        // next line for fetching 
        $view_student  = User::where('level', 'Nd2')->where('depart', 'Computer Science')->get();    
        return view('department.com-sci-nd2', compact('view_student'));
    }
    public function ViewComH(){
        // next line for fetching 
        $view_student  = User::where('level', 'Hnd1')->where('depart', 'Computer Science')->get();    
        return view('department.com-sci-hnd1', compact('view_student'));
    }
    public function ViewComH2(){
        // next line for fetching 
        $view_student  = User::where('level', 'Hnd2')->where('depart', 'Computer Science')->get();    
        return view('department.com-sci-hnd2', compact('view_student'));
    }
    public function ViewSlt1(){
        // next line for fetching 
        $view_student  = User::where('level', 'nd1')->where('depart', 'slt')->get();    
        return view('department.slt1', compact('view_student'));
    }
    public function ViewSlt2(){
        // next line for fetching 
        $view_student  = User::where('level', 'nd2')->where('depart', 'slt')->get();    
        return view('department.slt2', compact('view_student'));
    }
    public function AllSlt(){
        // next line for fetching 
        $view_student  = User::where('depart', 'Slt')->get();    
        return view('department.allslt', compact('view_student'));
    }

    public function AllPHY(){
        // next line for fetching 
        $view_student  = User::where('depart', 'physics')->get();    
        return view('department.allphy', compact('view_student'));
    }

    public function ViewP(){
        // next line for fetching 
        $view_student  = User::where('level', 'Hnd1')->where('depart', 'physics')->get();    
        return view('department.physics1', compact('view_student'));
    }
    public function ViewP2(){
        // next line for fetching 
        $view_student  = User::where('level', 'Hnd2')->where('depart', 'physics')->get();    
        return view('department.physics2', compact('view_student'));
    }
    public function AllBio(){
        // next line for fetching 
        $view_student  = User::where('depart', 'biology')->get();    
        return view('department.allbio', compact('view_student'));
    }

    public function ViewBio(){
        // next line for fetching 
        $view_student  = User::where('level', 'Hnd1')->where('depart', 'biology')->get();    
        return view('department.bio', compact('view_student'));
    }
    public function ViewBio2(){
        // next line for fetching 
        $view_student  = User::where('level', 'Hnd2')->where('depart', 'biology')->get();    
        return view('department.bio', compact('view_student'));
    }
    public function ViewChem(){
        // next line for fetching 
        $view_student  = User::where('level', 'Hnd1')->where('depart', 'chemistry')->get();    
        return view('department.chem', compact('view_student'));
    }
    public function ViewChem2(){
        // next line for fetching 
        $view_student  = User::where('level', 'Hnd2')->where('depart', 'chemistry')->get();    
        return view('department.chem2', compact('view_student'));
    }
    public function AllChem(){
        // next line for fetching 
        $view_student  = User::where('level', 'Hnd2')->where('depart', 'chemistry')->get();    
        return view('department.allchem', compact('view_student'));
    }

}
