<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return "Вітаємо на головній сторінці системи управління готелем!";
    }

    public function about()
    {
        return "Про проєкт: Автоматизована інформаційна система готелю. Призначена для контролю номерного фонду та бронювань.";
    }
}
