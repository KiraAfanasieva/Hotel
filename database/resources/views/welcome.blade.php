@extends('layouts.app')

@section('content')
<div class="container mt-5 text-center">
    <h1 class="display-4">Ласкаво просимо до нашого Готелю!</h1>
    <p class="lead mt-3">Найкращий відпочинок за доступними цінами. Відчуйте себе як вдома.</p>
    
    <div class="mt-4">
        <a href="{{ route('public.rooms') }}" class="btn btn-primary btn-lg">Переглянути номери</a>
    </div>

</div>
@endsection