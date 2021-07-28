<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\YatzyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



/**
 * Laravel original example route
 * --------------------------------------------------
 */
Route::get('/', function () {
    return view('welcome');
});



/**
 * Mikael example routes
 * --------------------------------------------------
 */
Route::get('/hello-world', function () {
    echo "Hello World";
});
Route::get('/hello-world-view', function () {
    return view('message', [
        'message' => "Hello World from within a view"
    ]);
});
Route::get('/hello', [HelloWorldController::class, 'hello']);
Route::get('/hello/{message}', [HelloWorldController::class, 'hello']);

Route::get('/form', [FormController::class, 'index']);
Route::post('/form/process', [FormController::class, 'process']);
Route::get('/form/view', [FormController::class, 'view']);



/**
 * Yatzy routes
 * --------------------------------------------------
 */
Route::get('yatzy/init/view', [YatzyController::class, 'viewInit']);
Route::post('yatzy/init/process', [YatzyController::class, 'processInit']);

Route::get('yatzy/view', [YatzyController::class, 'viewMain']);
Route::post('yatzy/process', [YatzyController::class, 'processMain']);

Route::get('yatzy/select/view', [YatzyController::class, 'viewSelect']);
Route::post('yatzy/select/process', [YatzyController::class, 'processSelect']);

Route::get('yatzy/result/view', [YatzyController::class, 'viewResult']);
Route::post('yatzy/result/process', [YatzyController::class, 'processResult']);



/**
 * DiceGame21 routes
 * --------------------------------------------------
 */
