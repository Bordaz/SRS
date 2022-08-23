<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\UserCourses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class CourseController extends Controller
{
    public function Courses(Request $request){
        $request->validate([
            'course_title' => ['required', 'string', 'max:150'],
            'course_code' => ['required','string'],
            'level' => ['required', 'string'],
            'program' => ['required','string'],
            'depart' => ['required', 'string'],
        ]);

        $course = New Course;
        $course->course_title = $request->input('course_title');
        $course->course_code = $request->input('course_code');
        $course->course_unit = $request->input('course_unit');
        $course->course_type = $request->input('course_type');
        $course->semester = $request->input('semester');
        $course->level =$request->input('level');
        $course->program = $request->input('program');
        $course->depart = $request->input('depart');
        $course->save();
        return back()->with('success', 'Course Created Successful');
    }
    public function ViewCourses(){
        $user = Auth::guard('web')->user();
        // next line for fetching 
        $view_course  = Course::where('level', $user->level)->where('program',$user->program)->where('depart', $user->depart)->where('semester','first')->get();
     
        return view('reg_course', compact('user', 'view_course'));

    }

   

  //      $course = New UserCourses();
  //      dd($request->all());
        
    }

