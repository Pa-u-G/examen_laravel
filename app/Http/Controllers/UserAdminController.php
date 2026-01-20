<?php

namespace App\Http\Controllers;

use App\Models\UserAdmin;
use App\Models\Event;
use App\Models\Inscription;
use Illuminate\Http\Request;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inscriptions = Inscription::all();

        return view("admin.index", compact("inscriptions"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserAdmin $userAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserAdmin $userAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserAdmin $userAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserAdmin $userAdmin)
    {
        //
    }

    public function download(Inscription $inscription)
    {
        $filePath = storage_path("app/public/" . $inscription->file);
        if (file_exists($filePath)) {
            return response()->download($filePath);
        } else {
            return redirect()->back()->with("error", "El fitxer no existeix.");
        }
    }

    public function search(Request $request){
        
        $events = [];

        if ($request["name"]!=""){
            $events =  Event::where('name', 'LIKE', '%' . $request['name'] . '%')->get();
        }
        if ($request["date"]!="") {
            $events =  Event::where('date', $request['date'] )->get();
        }
        if($request["date"]!="" && $request["name"]!=""){
            $events =  Event::where('date', $request['date'] )->where('name', 'LIKE', '%' . $request['name'] . '%')->get();
        }

        if($request["date"]=="" && $request["name"]==""){
            $inscriptions = Inscription::all();
        } else {

            $lista =[];
    
            foreach ($events as $key => $value) {
                array_push($lista, $value->id);
            }
    
            $inscriptions = Inscription::whereIn("event",  $lista)->get();
        }
        
        return view('admin.index', compact('inscriptions'));
        // echo $request['date'];
        // echo $request['name'];
        // echo $request;
        // echo isset($request["name"]);
        // echo $request['name']=="";
    }
}
