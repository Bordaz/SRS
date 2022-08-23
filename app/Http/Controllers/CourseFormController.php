<?php

namespace App\Http\Controllers;

use App\Models\UserCourses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseFormController extends Controller
{
    //
    public function SubmitCourse(Request $request){

        $request->validate([
            'course'=>'required',
        ],
        [
            'course'=>'you must register at least one course',
        ]);
        $user = Auth::user();  
        foreach($request->course as $index => $value):
        $user->courses()->save(
                new UserCourses([
                    'user_id' => $user->id,
                    'course_id' => $index,
                ])
                );
            endforeach;
        return back()->with('success', 'Courses Registered Successfully');
  

}

public function Viewpage(){

    


}

}
