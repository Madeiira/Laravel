<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

class EventController extends Controller
{
    public function index(){
        $events = Events::all();
        return view('welcome', 
        [
            'events' => $events
        ]);
    }

    public function create(){
        return view('events.create'); 
    }

    public function store(Request $request){

        $event = new Events;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        // Image upload

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")). "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
        }

        $event->save();

        return redirect('/')->with('msg', 'Event created successfully!');


    }

    public function show($id){
        $event = Events::findOrFail($id);

        return view('events.show' , 
        [
            'event' => $event
            ]);

    }
}
