<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RoomCard extends Component
{
    public $room;
    public $id;

    public function __construct($room, $id)
    {
        $this->room = $room;
        $this->id = $id;
    }

    public function render()
    {
        return view('components.room-card');
    }
}