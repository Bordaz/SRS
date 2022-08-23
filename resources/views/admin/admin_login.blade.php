@extends ('layout.layout2')


@section('content') <br>
<h4 style="margin-left:10px;"> ADMIN LOGIN HERE </h4>
<div class="col-sm-5">
  <form method="post" action="/admin_profile">
  @if(Session::has('success'))
<div class="alert alert-success"> {{Session::get('success')}} </div>
@endif
@if(Session::has('fail'))
<div class="alert alert-danger"> {{Session::get('fail')}} </div>
@endif
    @csrf
 <div class="form-group">
    <label>Email Address</label>
    <input type="email" name="email" class="form-control" placeholder="your email address here" value="{{old('email')}}">
          <span style="color:red;"> @error('email') {{$message}} @enderror</span>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" placeholder="*********">
    <span style="color:red;"> @error('password') {{$message}} @enderror</span>

  </div>
 
  <button type="submit" class="btn btn-primary">Login</button>
</form>  
</div>

@stop
 