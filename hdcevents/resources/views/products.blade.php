@extends('layouts.main')


@section('title', 'Project Larav')
    
@section('content')
    


<center>
<h1> View of Products </h1>
<br>
@if($search != '')
<h4>Your search is: {{$search}}</h4> 
@else 
@endif
</center>
<br>
@endsection