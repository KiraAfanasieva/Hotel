@extends('layouts.app')

@section('content')
<div class="bg-dark mb-4" style="height: 300px; background: url('https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') no-repeat center center; background-size: cover;">
</div>

<div class="container mb-5" style="margin-top: -80px;">
    <div class="row">
        <div class="col-lg-8 mb-4">
            <div class="card shadow border-0 p-4 h-100">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h1 class="fw-bold mb-0">Апартаменти #{{ $room->room_number }}</h1>
                    <span class="badge bg-dark fs-5">{{ strtoupper($room->room_type) }}</span>
                </div>
                <hr>
                <h5 class="mb-3">Про номер</h5>
                <p class="text-muted" style="line-height: 1.8;">
                    Відчуйте справжній комфорт у нашому номері класу {{ strtoupper($room->room_type) }}. 
                    Цей номер має сучасний дизайн, зручні меблі та все необхідне для повноцінного відпочинку після насиченого дня. 
                    Простора кімната забезпечить вам затишок та спокій.
                </p>
                
                <h5 class="mt-4 mb-3">Зручності</h5>
                <div class="row text-muted small">
                    <div class="col-sm-6 mb-2">✔️ Безкоштовний Wi-Fi</div>
                    <div class="col-sm-6 mb-2">✔️ Телевізор з плоским екраном</div>
                    <div class="col-sm-6 mb-2">✔️ Кондиціонер</div>
                    <div class="col-sm-6 mb-2">✔️ Власна ванна кімната</div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-4">
            <div class="card shadow border-0 p-4 h-100 sticky-top" style="top: 20px;">
                <p class="text-muted mb-1">Вартість проживання</p>
                <h2 class="text-success fw-bold">{{ $room->room_price }} ₴ <span class="fs-5 text-muted fw-normal">/ ніч</span></h2>
                
                <div class="my-4">
                    <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                        <span class="text-muted">Макс. гостей:</span>
                        <span class="fw-bold">{{ $room->room_capacity }} осіб</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                        <span class="text-muted">Статус:</span>
                        <span class="text-success fw-bold">Вільний</span>
                    </div>
                </div>

                <button class="btn btn-warning btn-lg w-100 fw-bold shadow-sm" onclick="alert('Форма бронювання в розробці!')">
                    Забронювати зараз
                </button>
                <a href="{{ route('public.rooms') }}" class="btn btn-link text-muted text-center w-100 mt-2 text-decoration-none">
                    &larr; Повернутися до каталогу
                </a>
            </div>
        </div>
    </div>
</div>
@endsection