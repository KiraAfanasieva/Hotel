@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            Деталі номера
        </div>
        <div class="card-body">
            <h5 class="card-title">Номер кімнати: {{ $room->room_number }}</h5>
            <p class="card-text">Клас: {{ strtoupper($room->room_type) }}</p>
            <p class="card-text">Місткість: {{ $room->room_capacity }} чол.</p>
            <p class="card-text">Ціна: {{ $room->room_price }} грн/доба</p>
            <a href="{{ route('rooms.index') }}" class="btn btn-secondary mt-3">Повернутися до списку</a>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            Деталі номера
        </div>
        <div class="card-body">
            <h5 class="card-title">Номер кімнати: {{ $room->room_number ?? '101' }}</h5>
            <p class="card-text">Клас: {{ $room->type ?? 'lux' }}</p>
            <p class="card-text">Ціна: {{ $room->price ?? '200' }} грн</p>
            <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Повернутися до списку</a>
        </div>
    </div>
</div>
@endsection