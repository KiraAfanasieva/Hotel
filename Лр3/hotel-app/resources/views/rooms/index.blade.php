@extends('layouts.app')

@section('title', 'Доступні номери')

@section('content')
    <h2 class="mb-4">Наш номерний фонд</h2>
    
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($rooms as $id => $room)
            <div class="col">
                <x-room-card :room="$room" :id="$id" />
            </div>
        @endforeach
    </div>
@endsection