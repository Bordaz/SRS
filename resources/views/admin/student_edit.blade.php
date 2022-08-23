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
  
  
    <h4>Edit Student Data</h4>
  
  </div>
  <div class="card-body">
    <table class="table table-bordered">
      <thead class="text-center">
        <tr>
          <th> Student ID </th>
          <th> Name </th>
          <th> Email </th>
          <th> Level </th>
          <th> Program </th>
          <th> Edit Student Data </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($student_edit as $student )
        <tr>
          <td class="text-center"> {{ $student->id }} </td>
          <td class="text-center"> <a href="{{ url('/edit', $student->id)}}"> {{ $student->name }} </a> </td>
          <td class="text-center"> {{ $student->level }} </td>
          <td class="text-center"> {{ $student->email }} </td>
          <td class="text-center"> {{ $student->program }} </td>
          <td class="text-center"> <a href="{{ url('/edit', $student->id) }}"  class="btn btn-success "> Edit  </a></td>
          
        </tr>
          
        @endforeach
      </tbody>
    </table>
  </div>
  </div>
       
     
</body>
</html>
<span> {{$student_edit->links()}} </span>
<style>
  .w-5
  {
    display:none;
  }
  
  </style>
@stop