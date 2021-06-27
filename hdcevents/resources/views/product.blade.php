@extends('layouts.main')


@section('title', 'Project Larav Product')
    
@section('content')
    <br>


<center>
<h1> View of Products </h1>
@if($id != null)
<h4>Your ID:{{ $id }}</h4> 
@else 

@endif
</center>

<br>
@endsection