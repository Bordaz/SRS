@extends('layout.user_layout')
@section('content2')




<div class="ml-lg-5 col-sm-5 w-100 ">
     

     <form method="post" action="/complain">
     @if(Session::has('success'))
   <div class="alert alert-success"> {{Session('success')}} </div>
   @endif
   @if(Session::has('fail'))
   <div class="alert alert-danger"> {{Session::get('fail')}} </div>
   @endif
       @csrf
       <div class="form-group">
          <label>Full name</label>
          <input type="text" name="f_name" class="form-control" placeholder="your full name here" value="{{old('f_name')}}">
                <span style="color:red;"> @error('f_name') {{$message}} @enderror</span>
        </div>
        <div class="form-group">
          <label>Matric</label>
          <input type="text" name="matric" class="form-control" placeholder="your matric number here" value="{{old('matric')}}">
                <span style="color:red;"> @error('matric') {{$message}} @enderror</span>
        </div>
        <div class="form-group">
          <label>Level</label>
          <input type="text" name="level" class="form-control" placeholder="your level" value="{{old('level')}}">
                <span style="color:red;"> @error('level') {{$message}} @enderror</span>
        </div>
    <div class="form-group">
       <label>Email Address</label>
       <input type="email" name="email" class="form-control" placeholder="your email address here" value="{{old('email')}}">
             <span style="color:red;"> @error('email') {{$message}} @enderror</span>
     </div>
     <div class="form-group">
       <label>Your Complain here</label>
       <textarea style="resize: none" name="complain" rows="5" class="form-control "> </textarea>
       <span style="color:red;"> @error('complain') {{$message}} @enderror</span>
   
     </div>
    
     <button type="submit" class="btn btn-primary w-40 p-2">Make a complain</button>
   </form>  
   </div>






















@stop