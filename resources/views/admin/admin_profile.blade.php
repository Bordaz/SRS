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
   
    <div class="container"> 

        <table class="table table-bordered">
        <thead>
        <h1 > My Profile </h1>
        
        </thead>
        <tr>
        <td> Name </td>
        <td> {{ $admin->email }}</td>
        <tr>
       
        </table>
        </div>
     
</body>
</html>
@stop