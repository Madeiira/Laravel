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

        $event->save();

        return redirect('/');


    }
}
