@extends('layout.user_layout')
@section('content2')

<div class="col-sm-8"> 
    
     <table class="table table-bordered content-center">
          <thead>
          
          <tr>
             <th>  S/N </th>
             <th> Course Tittle </th>
             <th> Code </th>
             <th> Unit </th>
             <th> Type </th>
          </tr>
          </thead>
          <tbody>

               @foreach ($user->courses as $course )

               <tr> 
                    <td>{{ $course->id }} </td>
                    <td>{{ $course->course_title }} </td>
                    <td> {{ $course->course_code }} </td>
                    <td> {{ $course->course_unit }} </td>
                    <td> {{ $course->course_type }} </td>
                    

               </tr>

@endforeach
          </tbody>
     </table>

     <button type="submit" class="btn btn-primary">Print Course Form</button>
</form>







</div>

















@stop