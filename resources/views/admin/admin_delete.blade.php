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
  
  
    <h4>Delete Admin Data</h4>
    @if(Session::has('status'))
    <div class="alert alert-success"> {{Session::get('status')}} </div>
    @endif
     
  </div>
  <div class="card-body">
    <table class="table table-bordered">
      <thead class="text-center">
        <tr>
          <th> Admin ID </th>
          <th> email </th>
          <th> Delete Admin </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($admin as $admin )
        <tr>
          <td class="text-center">{{ $admin->id }} </td>
          <td class="text-center"> {{ $admin->email }} </td>
<td class="text-center"> <a href="{{ url('/delete', $admin->id) }}" class="btn btn-danger "> <i class="nav-icon fas fa-trash"></i> Delete  </a></td>
          
        </tr>
          
        @endforeach
      </tbody>
    </table>
  </div>
  </div>
       
     
</body>
</html>

<style>
  .w-5
  {
    display:none;
  }
  
  </style>
@stop