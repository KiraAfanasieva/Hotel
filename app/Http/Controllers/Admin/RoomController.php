<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all(); 
        return view('admin.rooms.index', ['rooms' => $rooms]);
    }

    public function show(Room $room)
    {
        return view('admin.rooms.show', ['room' => $room]);
    }

    public function destroy(Room $room)
    {
        $room->delete();

        return redirect()->route('rooms.index')->with('success', 'Номер видалено');
    }
}