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

Route::get('/Hello/{name}', function ($name) {
    return 'Olá, '. $name. ', bem-vindo ao meu site';
}) ->where('name', '[A-Za-z]{3,}$');

Route::get('/conta/{number1}/{number2}/{operacao?}', function ($number1, $number2){
    $soma= $number1 + $number2;
    $subtracao= $number1 - $number2;
    $multiplicacao= $number1 * $number2;
    $divisao= $number1 / $number2;
})
->where(['number1' => '[0-9]+', 'number2' => '[0-9]+'])
->whereIn('operacao', ['soma', 'subtracao', 'multiplicacao', 'divisao'])
->name('conta');


    /*if ($operacao == 'soma'){
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
    }*/