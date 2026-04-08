@extends('layouts.app')

@section('content')
<div class="bg-dark text-white text-center py-5 mb-5" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') no-repeat center center; background-size: cover;">
    <div class="container py-4">
        <h1 class="display-4 fw-bold">Наші апартаменти</h1>
        <p class="lead">Оберіть ідеальний номер для вашого незабутнього відпочинку</p>
    </div>
</div>

<div class="container mb-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        
        @foreach($rooms as $room)
        <div class="col">
            <div class="card h-100 shadow-sm border-0 transition-hover">
                <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Фото номера" style="height: 200px; object-fit: cover;">
                
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="card-title mb-0 fw-bold">Номер {{ $room->room_number }}</h5>
                        
                        @if(strtolower($room->room_type) == 'lux')
                            <span class="badge bg-warning text-dark fs-6">LUX</span>
                        @elseif(strtolower($room->room_type) == 'halflux')
                            <span class="badge bg-info text-dark fs-6">HALF-LUX</span>
                        @else
                            <span class="badge bg-secondary fs-6">STANDARD</span>
                        @endif
                    </div>
                    
                    <p class="card-text text-muted small">
                        Місткість: до {{ $room->room_capacity }} осіб <br>
                        Ідеальний вибір для комфортного проживання з усіма зручностями.
                    </p>
                </div>
                
                <div class="card-footer bg-white border-top-0 d-flex justify-content-between align-items-center pb-3">
                    <span class="fs-4 fw-bold text-success">{{ $room->room_price }} ₴ <span class="fs-6 text-muted fw-normal">/ доба</span></span>
                    <a href="{{ route('public.rooms.show', $room->room_id) }}" class="btn btn-dark">Детальніше</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

<style>
    .transition-hover { transition: transform 0.3s ease, box-shadow 0.3s ease; }
    .transition-hover:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.15) !important; }
</style>
@endsection