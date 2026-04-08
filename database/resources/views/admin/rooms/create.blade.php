@extends('layouts.app') {{-- Або твій основний шаблон --}}

@section('content')
<div class="container">
    <h2>Додати новий номер</h2>

    <form action="{{ route('rooms.store') }}" method="POST">
        @csrf {{-- Обов'язковий токен безпеки --}}

        <div class="mb-3">
            <label class="form-label">Номер кімнати</label>
            <input type="text" name="room_number" class="form-control" value="{{ old('room_number') }}">
            {{-- Директива error для відображення помилки --}}
            @error('room_number')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Тип (наприклад: lux, standard)</label>
            <input type="text" name="type" class="form-control" value="{{ old('type') }}">
            @error('type')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Місткість (осіб)</label>
            <input type="number" name="capacity" class="form-control" value="{{ old('capacity') }}">
            @error('capacity')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Ціна</label>
            <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price') }}">
            @error('price')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Зберегти номер</button>
        <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Скасувати</a>
    </form>
</div>
@endsection