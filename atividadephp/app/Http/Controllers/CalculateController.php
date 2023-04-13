<?php

namespace App\Http\Controllers;

class CalculateController extends Controller {

    public function soma(int $number1, int $number2) {
        return "Soma:". $number1+$number2;
    }
    public function subtracao(int $number1, int $number2) {
        return "Subtração:". $number1-$number2;
    }
    public function multiplicacao(int $number1, int $number2) {
        return "Multiplicação:". $number1*$number2;
    }
    public function divisao(int $number1, int $number2) {
        return "Divisão:" . round($number1/$number2, 2);
    }

    public function calculate($number1, $number2, $operacao = null) {
        if($operacao === null) {
            $soma = $number1 + $number2;
            $subtracao = $number1 - $number2;
            $multiplicacao = $number1 * $number2;
            $divisao = $number1 / $number2;
            return
                $number1. ' + '. $number2. ' = ' . $soma. '<br>'.
                $number1. ' - '. $number2. ' = ' . $subtracao. '<br>'.
                $number1. ' x '. $number2. ' = ' . $multiplicacao . '<br>'.
                $number1 . ' % ' . $number2 . ' = ' . $divisao;
        }
        elseif($operacao == 'soma'){
            $soma = $number1 + $number2;
            return
            "Soma: ". $number1. ' + '. $number2. ' = ' . $soma;
        }
        elseif($operacao == 'subtracao'){
            $subtracao = $number1 - $number2;
            return
            "Subtração: ". $number1. ' - '. $number2. ' = ' . $subtracao;
        }
        elseif($operacao == 'multiplicacao'){
            $multiplicacao = $number1 * $number2;
            return
            "Multiplicação: ". $number1. ' x '. $number2. ' = ' . $multiplicacao;
        }
        elseif($operacao == 'divisao'){
            $divisao = $number1 / $number2;
            return
            "Divisão: ". $number1. ' / '. $number2. ' = ' . $divisao;
        }
    }
}