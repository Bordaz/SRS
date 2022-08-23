@extends('layout.layout')


@section('content') 
<h1 > Student Registration  Page </h1>
<div class="col-sm-8">
  <form method="post" action="{{ url('/reg')}}" enctype=multipart/form-data>
  @if(Session::has('success'))
<div class="alert alert-success"> {{Session::get('success')}} </div>
@endif
@if(Session::has('fail'))
<div class="alert alert-danger"> {{Session::get('fail')}} </div>
@endif
    @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Name</label>
      <input type="text" name="name" class="form-control" placeholder="your name here" value="{{old('name')}}">
      <span style="color:red;"> @error('name') {{$message}} @enderror</span>
    </div>
    <div class="form-group col-md-6">
      <label>Email</label>
      <input type="email" name="email" class="form-control" placeholder="your email address here" value="{{old('email')}}">
      <span style="color:red;"> @error('email') {{$message}} @enderror</span>

    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Password</label>
      <input type="password" name="password" class="form-control" placeholder="*********" value="{{old('password')}}">
      <span style="color:red;"> @error('password') {{$message}} @enderror</span>

    </div>
    <div class="form-group col-md-6">
      <label>Dob</label>
      <input type="date" name="birthday" class="form-control"  >
      <span style="color:red;"> @error('name') {{'Date of birth field is required'}} @enderror</span>
    </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>State</label>
      <input type="text" name="state" class="form-control" placeholder="your state here" value="{{old('state')}}">
      <span style="color:red;"> @error('state') {{$message}} @enderror</span>

    </div>
    <div class="form-group col-md-6">
      <label>Matric no/Form no</label>
      <input type="text" placeholder="enter your matric number" name="matric" class="form-control"  >
      <span style="color:red;"> @error('matric') {{'matric number/ form number is required'}} @enderror</span>
    </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>City</label>
      <input type="text" name="city" class="form-control" placeholder="your city here" value="{{old('city')}}" >
      <span style="color:red;"> @error('city') {{$message}} @enderror</span>

    </div>
    
    
    <div class="form-group col-md-6">
      <label>House Address</label>
      <input type="text" name="address" class="form-control" placeholder="your house address" value="{{old('address')}}">
      <span style="color:red;"> @error('address') {{$message}} @enderror</span>

    </div>
    <div class="form-group col-md-4">
      <label>Phone Number</label>
      <input type="text" name="phone_number" class="form-control" placeholder="your mobile number here" value="{{old('phone_number')}}" >
      <span style="color:red;"> @error('phone_number') {{$message}} @enderror</span>

    </div>
     <div class="form-group col-md-4">
      <label>Department</label>
      <input type="text" name="depart" class="form-control" placeholder="your mobile number here" value="{{old('phone_number')}}" >
      <span style="color:red;"> @error('depart') {{$message}} @enderror</span>

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

    <div class="form-group col-md-4">
      <label >Gender</label>
      <select name="gender" class="form-control" required>
        <option selected>Choose...</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label>Relationship</label>
      <select  name="relationship" class="form-control" required>
        <option selected>Choose...</option>
        <option value="single">Single</option>
        <option value="married">Married</option>
      </select>
      
    </div>
    <div class="form-group mb-3">
    <label>Upload picture</label>
    <input type="file" name='dp' class="form-control" id="exampleFormControlFile1">
  </div>
    
    
  </div>
 
  <button type="submit" class="btn btn-primary">Register</button>
</form>  
<a href="/login"> Already a registered? Login Here </a>

</div>
@endsection