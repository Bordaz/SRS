@extends ('layout.admin_layout')


@section('content') <br>
<div class="container">
  <h4 style="margin-left:10px;"> Create Courses </h4>
<div class="col-sm-5">
  <form method="post" action="/create">
  @if(Session::has('success'))
<div class="alert alert-success"> {{Session::get('success')}} </div>
@endif
@if(Session::has('fail'))
<div class="alert alert-danger"> {{Session::get('fail')}} </div>
@endif
    @csrf
 <div class="form-group">
    <label>Course title</label>
    <input type="text" name="course_title" class="form-control" placeholder="Course title here" value="{{old('course_title')}}">
          <span style="color:red;"> @error('course_title') {{$message}} @enderror</span>
  </div>
  <div class="form-row">
      <div class="form-group col -ml-6">
        <label>Course code</label>
        <input type="text" name="course_code" class="form-control" placeholder=" enter course code">
        <span style="color:red;"> @error('course_code') {{$message}} @enderror</span>
      </div>

    <div class="form-group col -ml-3">
      <label>Course Unit</label>
      <input type="text" name="course_unit" class="form-control" placeholder=" enter course unit">
      <span style="color:red;"> @error('course_unit') {{$message}} @enderror</span>
    </div>

  <div class="form-group col-md-3">
    <label>Course Type</label>
      <select name="course_type" class="form-control" required>
        <option selected>Choose...</option>
        <option value="Core">core</option>
        <option value="Elective">elective</option>
        <option value="Gns">Gns</option>
      </select>

  </div>
  </div>

<div class="form-row">
     <div class="form-group col-md-4">
          <label >Semester</label>
          <select name="semester" class="form-control" required>
            <option selected>Choose...</option>
            <option value="first">First Semester</option>
            <option value="second">Second Semester</option>
            <option value="third">Third Semester</option>
          </select>
        </div>
<div class="form-group col-md-4">
     <label >Level</label>
     <select name="level" class="form-control" required>
       <option selected>Choose...</option>
       <option value="Hnd2">Hnd2</option>
       <option value="Hnd1">Hnd1</option>
       <option value="Nd2">Nd2</option>
       <option value="Nd1">Nd1</option>
     </select>
   </div>
   <div class="form-group col-md-4">
     <label >Program</label>
     <select name="program" class="form-control" required>
       <option selected>Choose...</option>
       <option value="Ft">Full Time</option>
       <option value="Dpp">DPP</option>
       <option value="Pt">Part time</option>
     </select>
   </div> 
</div>
   <div class="form-group">
     <label>Department</label>
     <input type="text" name="depart" class="form-control" placeholder=" enter department">
     <span style="color:red;"> @error('depart') {{$message}} @enderror</span>
 </div>
  <button type="submit" class="btn btn-primary">Create Course</button>
</form>  
</div>
</div>

@stop
 