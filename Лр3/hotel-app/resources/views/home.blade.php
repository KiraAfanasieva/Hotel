@extends('layouts.app')

@section('title', 'Головна сторінка')

@section('content')
    <div class="p-5 mb-4 bg-light rounded-3 shadow-sm">
        <div class="container-fluid py-5 text-center">
            <h1 class="display-5 fw-bold">Автоматизація готелю</h1>
            <p class="col-md-8 mx-auto fs-4">Це головна сторінка курсового проєкту для управління номерним фондом та клієнтами.</p>
            <a href="/rooms" class="btn btn-primary btn-lg mt-3">Переглянути номери</a>
        </div>
    </div>
@endsection