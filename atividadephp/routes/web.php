<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/Hello/{name}', function (str $name) {
    if ($name <3){
        echo 'É necessário mais de 3 digitos';
    }
    elseif(is_int($name)){
        echo 'Seu nome deve conter apenas letras';
    }
    else{
        echo 'Olá, '. $name. ', bem-vindo ao meu site';
    }
});

Route::get('/conta/{number1}/{number2}/{operacao?}', function (int $number1, $number2, $operacao){
    if ($operacao == 'soma'){
        $operacaoSoma = $number1 + $number2;
        return $number1. '+'. $number2. '='. $operacaoSoma;
    }
    elseif ($operacao == 'subtracao'){
        $operacaoSubtracao = $number1 - $number2;
        return $number1. '-'. $number2. '='. $operacaoSubtracao;
    }
    elseif ($operacao == 'multiplicacao'){
        $operacaoMultiplicacao = $number1 * $number2;
        return $number1. 'x'. $number2. '='. $operacaoMultiplicacao;
    }
    elseif ($operacao == 'divisao'){
        $operacaoDivisao = $number1 / $number2;
        return $number1. '/'. $number2. '='. $operacaoDivisao;
    }
});
