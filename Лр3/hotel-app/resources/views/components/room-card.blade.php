<div class="card h-100 shadow-sm">
    <div class="card-body">
        <h5 class="card-title">Номер: {{ $room['room_number'] }}</h5>
        <h6 class="card-subtitle mb-3 text-muted">Клас: {{ strtoupper($room['type']) }}</h6>
        <p class="card-text">
            <strong>Місткість:</strong> {{ $room['capacity'] }} чол.<br>
            <strong>Ціна:</strong> {{ $room['price'] }} грн/доба
        </p>
    </div>
    <div class="card-footer bg-transparent border-top-0">
        <a href="/rooms/{{ $id }}" class="btn btn-outline-primary w-100">Бронювати</a>
    </div>
</div>