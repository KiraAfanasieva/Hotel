<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoomController extends Controller
{
    public function index() {
        return response()->json(Room::all(), 200);
    }

    public function show($id) {
        $room = Room::where('room_id', $id)->first();
        return $room ? response()->json($room, 200) : response()->json(['error' => 'Не знайдено'], 404);
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'room_number' => 'required|unique:rooms,room_number',
            'room_type' => 'required|in:lux,halflux,standard',
            'room_capacity' => 'required|integer|min:1',
            'room_price' => 'required|numeric|min:0'
        ]);

        if ($validator->fails()) return response()->json($validator->errors(), 400);

        $room = Room::create($request->all());
        return response()->json($room, 201);
    }

    public function update(Request $request, $id) {
        $room = Room::where('room_id', $id)->first();
        if (!$room) return response()->json(['error' => 'Об\'єкт не знайдено'], 404);
        
        $room->update($request->all());
        return response()->json($room, 200);
    }

    public function destroy($id) {
        $room = Room::where('room_id', $id)->first();
        if (!$room) return response()->json(['error' => 'ID не існує'], 404);
        
        $room->delete();
        return response()->json(['message' => 'Успішно видалено'], 200);
    }
}