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
        return "Детальна інформація та форма бронювання для номера з ID: " . $id . " (сюди теж згодом можна буде додати свій шаблон)";
    }
}