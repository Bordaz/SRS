@extends ('layout.admin_layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Admin Profile Page</title>
</head>
<body>
<div class="div" class="container">
  <div class="card-header">


  <h4>All Computer Science Student List</h4>

</div>
<div class="card-body">
  <table class="table table-border">
    <thead>
      <tr>
        <th> Student ID </th>
        <th> matric number </th>
        <th> Name </th>
        <th> Email </th>
        <th> Department </th>
        <th> Date of birth </th>
        <th> Level </th>
        <th> Program </th>
        <th> Picture </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($view_student as $index=> $student )
      <tr>
        <td>{{ $index + 1 }} </td>
        <td> {{ $student->matric }} </td>
        <td> <a href="{{ url('/edit', $student->id)}}"> {{ $student->name }} </a> </td>
        <td> {{ $student->email }} </td>
        <td> {{ $student->depart }} </td>
        <td> {{ $student->birthday}} </td>
        <td> {{ $student->level }} </td>
        <td> {{ $student->program }} </td>
        <td>  <img class="img-circle" src="{{ asset('uploads/images/'.$student->dp)  }}" width="70px" height="40px" />  </td>
      </tr>
        
      @endforeach
    </tbody>
  </table>
</div>
</div>
     
</body>
</html>

@stop