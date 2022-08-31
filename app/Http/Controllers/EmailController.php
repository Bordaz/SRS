<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\StudentComplain;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class EmailController extends Controller
{
    //
    public function ComplainSubmit(Request $request)
    {
        $data = [    
            'f_name' => $request->f_name,
            'matric' => $request->matric,
            'level' => $request->level,
            'email' => $request->email,
            'complain' => $request->complain,

        ];
        Mail::to('ayoopeyemi6@gmail.com')->send(new StudentComplain($data));
        Session::flash('success', ' Your Complain Successfully sent');
        return back()->with('success', 'Your Complained has been sent successfully');
    }
}
