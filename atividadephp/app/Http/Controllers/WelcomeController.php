<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello($name) {
        return 'Olá, '. $name. ', bem-vindo ao meu site';
    }
}