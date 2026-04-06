@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Управління номерами</h2>
    <table class="table table-bordered mt-3">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Номер</th>
                <th>Клас</th>
                <th>Ціна</th>
                <th>Дії</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rooms as $room)
            <tr>
                <td>{{ $room->room_id }}</td>
                <td>{{ $room->room_number }}</td>
                <td>{{ strtoupper($room->room_type) }}</td>
                <td>{{ $room->room_price }} грн</td>
                <td>
                    <a href="{{ route('rooms.show', $room->room_id) }}" class="btn btn-sm btn-info">Перегляд</a>
                    
                    <form action="{{ route('rooms.destroy', $room->room_id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Видалити цей номер?')">Видалити</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection