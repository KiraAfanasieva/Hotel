<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = \App\Models\Room::all(); 
        
        return view('rooms.index', ['rooms' => $rooms]);
    }

    public function show($id)
    {
        $room = \App\Models\Room::findOrFail($id);

        return view('rooms.show', ['room' => $room]);
    }
}