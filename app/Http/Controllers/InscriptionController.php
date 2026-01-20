<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use App\Models\Event;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view("events.index", compact("events"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Event $event)
    {
        return view("events.create", compact("event"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Event $event)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'dni.*' => 'required|file|mimes:jpg,png',
        ]);
        // foreach ($data as $key => $value) {
        //     echo($key."<br>");
        //     echo($value."<br>");
        // }

        if (!$request->hasFile('dni')) {
            return back()->with('error', 'No has pujat cap fitxer');
        }

        foreach ($request->file('dni') as $file) {
            $extension = explode(".", $file->getClientOriginalName());
            $path = $file->storeAs('dni', $request['email'].$event->id.".".end($extension), "public");

            echo $path;
        }

        $event_validate = Inscription::where('file', $path)->get();

        if (isset($event_validate[0])) {
            return back()->with('error', 'Ya estas inscrito');
        }

        Inscription::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'file' => $path,
            'event' => $event->id,
        ]);
        
        $events = Event::all();
        return view("events.index", compact("events"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Inscription $inscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inscription $inscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inscription $inscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inscription $inscription)
    {
        //
    }
}
