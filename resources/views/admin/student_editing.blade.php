<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>

<div class="col-sm-12">
<h1> UPDATE STUDENT DATA </h1>
 @if(Session::has('status'))
    <div class="alert alert-success"> {{Session::get('status')}} </div>
    @endif
<div class="col-sm-5">
<form action="{{url('/update', $student->id)}}" method="post" >
    @csrf
  <div class="form-row">
  
  <input type="hidden" name="id" class="form-control" value="{{$student->id}}" >
  <div class="form-group col-md-6">
    <label> Name</label>
    <input type="text" name="name" class="form-control" value="{{$student->name}}" placeholder="Name here">
    </div>
      <div class="form-group col-md-6">
    <label>Email</label>
    <input type="email" name="email" class="form-control" value="{{$student->email}}" placeholder="Email Address here">
    </div>
      <div class="form-group col-md-4">
    <label>Date of birth</label>
    <input type="date" name="birthday" class="form-control" value="{{$student->birthday}}">
    </div>
      <div class="form-group col-md-4">
    <label>State</label>
    <input type="text" name="state" class="form-control" value="{{$student->state}}" placeholder="Student State here">
    </div>

     <div class="form-group col-md-4">
    <label>City</label>
    <input type="text" name="city" class="form-control" value="{{$student->city}}" placeholder="Student city here">
    </div>
  <div class="form-group col-md-12">
    <label>Address</label>
    <input type="text" name="address" class="form-control" value="{{$student->address}}" placeholder="Student Address here">
    </div>

      <div class="form-group col-md-4">

    <label>Mobile Number</label>
    <input type="text" name="phone_number" class="form-control" value="{{$student->phone_number}}" placeholder="Student Mobile number">
    </div>

    <div class="form-group col-md-4">
     <label >Level</label>
     <select name="level" class="form-control" required>
       <option selected>{{ $student->level }}</option>
       <option value="Hnd2">Hnd2</option>
       <option value="Hnd1">Hnd1</option>
       <option value="Nd2">Nd2</option>
       <option value="Nd1">Nd1</option>
     </select>
   </div>

   <div class="form-group col-md-4">
     <label >Program</label>
     <select name="program" class="form-control" required>
       <option selected>{{ $student->program }}</option>
       <option value="Ft">Full Time</option>
       <option value="Dpp">DPP</option>
       <option value="Pt">Part time</option>
     </select>
   </div> 

    <div class="form-group col-md-6">
      <label >Gender</label>
      <select name="gender" class="form-control" required>
        <option selected>{{ $student->gender }}</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
    </div>

    <div class="form-group col-md-6">
      <label>Relationship</label>
      <select  name="relationship" class="form-control" required>
        <option selected>{{ $student->relationship }}</option>
        <option value="single">Single</option>
        <option value="married">Married</option>
      </select>
      
    </div>
    
  </div>
  
  
  <button type="submit" class="btn btn-primary">Update Student Records</button>
</form>    
</div>

</div>
 