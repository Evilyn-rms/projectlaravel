<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class BirthdayController extends Controller
{
    public function calculateDate($year, $month = null, $day = null) {
        $presentDate = Carbon::now('America/Sao_Paulo');
        $birthDate = Carbon::createFromDate($year, $month, $day, 'America/Sao_Paulo');
        $date = $birthDate->diff($presentDate);

        if($birthDate > $presentDate) {
            $res = "Não é possível calcular em uma data futura.";
        } else if($birthDate === $presentDate) {
            $res = "A data mostra o dia de hoje.";
        } else if($month === null || $day === null) {
            $res = "Tem " . $presentDate->format('Y') - $year . " anos de idade.";
        } else {
            $res = "Você possui " . $date->format('%y') . " ano(s), " . $date->format('%m') . " mês(es) e " . $date->format('%d') . " dias de idade.";
        }
        return $res;
    }
}