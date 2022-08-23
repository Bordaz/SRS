@extends('layout.user_layout')
@section('content2')

<div class="container"> 

<table class="table table-bordered">
<thead>
<h1 > User Profile </h1>

</thead>
<tr>
<td> Name </td>
<td> {{$user->name}}</td>
</tr>
<tr>
<td> Email </td>
<td> {{ $user->email}} </td>
</tr>
<tr>
<td> Date of birth </td>
<td> {{$user->birthday}}</td>
</tr>
<tr> 
<td> State </td>
<td> {{$user->state}} </td>
</tr>
<tr> 
<td> Department </td>
<td> {{$user->depart}} </td>
</tr>
<tr> 
<td> Matric no / Form no </td>
<td> {{$user->matric}} </td>
</tr>

<tr>
<td> City </td>
<td>{{ $user->city }}</td>
</tr>
<tr>
<td> Address </td>
<td> {{ $user->address}} </td>
</tr>
<tr>
<td> Mobile Number </td>
<td> {{ $user->phone_number}} </td>
</tr>
<tr>
<td> Level </td>
<td> {{ $user->level}} </td>
</tr>
<tr>
<td> Program </td>
<td> {{ $user->program}} </td>
</tr>
<tr>
<td> Gender </td>
<td>{{$user->gender}} </td>
</tr>
<tr>
<td> Relationship </td>
<td> {{$user->relationship}}</td>
</tr>

</table>
</div>

@stop