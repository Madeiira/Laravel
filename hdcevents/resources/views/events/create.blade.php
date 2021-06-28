@extends('layouts.main')


@section('title', 'Project Larav Create Event')
    
@section('content')
    
    
<div id="event-create-container" class="col-md-6 offset-md-3">

    <h1> Create a Event</h1>

    <form action="/events" method="POST" enctype="multipart/form-data"> 
        @csrf
        <div class="forn-group">
            <label for="image">Event image: </label>
            <input type="file" name="image" id="image" class="from-control-file">
            <br>
        </div>
        <div class="forn-group">
            <label for="title">Event title: </label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title of Event">
            <br>
        </div>
        
        <div class="forn-group">

            <label for="title">Event description: </label>
            <textarea name="description" id="description" placeholder="Description of the Event" class="form-control"></textarea>
            <br>
        </div>

        <div class="forn-group">

            <label for="title">Event location: </label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Location of Event">
            <br>
        </div>

        <div class="forn-group">

            <label for="title">Event is private? </label>
            <select name="private" id="private" class="form-control">
                
                <option value="0"> No </option>
                <option value="1"> Yes </option>

            </select>
        </div>
        <br>
        <input type="submit" value="Create Event" class="btn btn-primary">     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a class="btn btn-primary"href="/"> Back to Welcome. </a>
    </form>


 </div>
 


@endsection