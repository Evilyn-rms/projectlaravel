<?php
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
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CalculateController;
use App\Http\Controllers\BirthdayController;
use Illuminate\Support\Facades\Route;


Route::get('/hello/{name}', [WelcomeController::class, 'hello'])
->where('name', '[A-Za-z]{3,}$');

Route::get('/conta/{number1}/{number2}/{operator?}', [CalculateController::class, 'calculate'])

->where('number1', '^[1-9][0-9]?$')
->where('number2', '^[1-9][0-9]?$')
->whereIn('operacao', ['soma', 'subtracao', 'multiplicacao', 'divisao']);

Route::get('/idade/{year}/{month?}/{day?}', [BirthdayController::class, 'calculateDate'])->where('year', '[0-9]{4}')
->where('month', '[0-9]{1,2}?')
->where('day', '[0-9]{1,2}?');