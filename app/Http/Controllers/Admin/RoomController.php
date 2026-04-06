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

    public function create()
    {
        return view('admin.rooms.create');
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

   public function store(Request $request)
    {
        $validatedData = $request->validate([
            'room_number' => ['required', 'string', 'max:10', 'regex:/^[a-zA-Z0-9]+$/', 'unique:rooms,room_number'],
            'type'        => 'required|string|in:lux,halflux,standard',
            'capacity'    => 'required|integer|min:1',
            'price'       => 'required|numeric|min:0.01'
        ], [
            'room_number.required' => 'Поле "Номер" є обов\'язковим.',
            'room_number.regex'    => 'Номер може містити лише цифри та латинські літери.',
            'room_number.unique'   => 'Номер з такою назвою вже існує в базі!',
            'type.required'        => 'Поле "Тип" є обов\'язковим.',
            'type.in'              => 'Тип має бути лише: lux, halflux або standard.',
            'capacity.required'    => 'Вкажіть місткість.',
            'capacity.min'         => 'Місткість має бути не менше 1.',
            'price.required'       => 'Вкажіть ціну.',
            'price.min'            => 'Ціна має бути більшою за нуль.'
        ]);

        $roomData = [
            'room_number'   => $validatedData['room_number'],
            'room_type'     => $validatedData['type'],
            'room_capacity' => $validatedData['capacity'],
            'room_price'    => $validatedData['price'],
        ];

        Room::create($roomData);

        return redirect()->route('rooms.index')->with('success', 'Новий номер успішно додано!');
    }
}