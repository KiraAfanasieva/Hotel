<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        // Статичний масив номерів готелю
        $rooms = [
            1 => ['room_number' => '101', 'type' => 'lux', 'capacity' => 2, 'price' => 200.00],
            2 => ['room_number' => '102', 'type' => 'halflux', 'capacity' => 2, 'price' => 150.00],
            3 => ['room_number' => '103', 'type' => 'standard', 'capacity' => 1, 'price' => 100.00]
        ];
        
        return response()->json($rooms);
    }

    public function show($id)
    {
        return "Детальна інформація та форма бронювання для номера з ID: " . $id;
    }
}
