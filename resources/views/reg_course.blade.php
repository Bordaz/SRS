@extends('layout.user_layout')
@section('content2')
@if (!$user->courses()->exists())
<div class="col-sm-8"> 
     <form method="post" action="/course">
     @if(Session::has('success'))
   <div class="alert alert-success"> {{Session::get('success')}} </div>
   @endif
   @if(Session::has('fail'))
   <div class="alert alert-danger"> {{Session::get('fail')}} </div>
   @endif
   @if ($errors->any())
   <ul class="alert alert-danger">
     @foreach ($errors->all() as $error)
     <li> {{ $error }}</li>
          
     @endforeach
   </ul>        
   @endif
     @csrf
     <table class="table table-bordered">
          <thead>
          
          <tr>
             <th>  S/N </th>
             <th> Course Tittle </th>
             <th> Code </th>
             <th> Unit </th>
             <th> Type </th>
             <th> Check </th>
          </tr>
          </thead>
          <tbody>

  {{-- $index is used to loop and number it from 1 to number of courses instead of displaying the course id in the database --}}
               @foreach ($view_course as $index=> $course )

               <tr> 
                   {{-- <input type="hidden" name="course_id" value="$course->id"/>  --}}
                    <td>{{ $index + 1 }} </td>
                    <td>{{ $course->course_title }} </td>
                    <td> {{ $course->course_code }} </td>
                    <td> {{ $course->course_unit }} </td>
                    <td> {{ $course->course_type }} </td>
                    <td> 
<center>  <input class="form-check-input" name="course[{{ $course->id }}]" type="checkbox" value="1" id="flexCheckDefault">   </center>                      
                    </td>

               </tr>

@endforeach
          </tbody>
     </table>

     <button type="submit" class="btn btn-primary">Register Courses</button>
</form>


@else
<div class="text-center"> Your  courses have been submitted </div>




</div>

@endif

@stop