@extends ('layout.admin_layout')


@section('content') <br>
<div class="container">
  <h4 style="margin-left:10px;"> Create Admin here </h4>
<div class="col-sm-5">
  <form method="post" action="/addAdmin">
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

    <div class="form-group mb-4">
    <label>Upload Admin picture</label>
    <input type="file" name='dp' class="form-control" id="exampleFormControlFile1" required>

  </div>
 
  <button type="submit" class="btn btn-primary">Create Admin</button>
</form>  
</div>
</div>

@stop
 