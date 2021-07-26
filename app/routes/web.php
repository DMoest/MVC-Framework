<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\FormController;

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
 * DiceGame21 routes
 * --------------------------------------------------
 */
Route::get('/diceGame21_init', function() {
    return view('diceGame21_init', [
        'header' => "DiceGame21 - INITIALIZATION",
        'message' => "You are at route GET /diceGame21_init. Start a game DiceGame21 from here..."
    ]);
});

Route::post('/diceGame21_init', function() {
//    process things here...
//    return view('diceGame21_init', [
//        'header' => "DiceGame21 - INITIALIZATION",
//        'message' => "You are at route POST /diceGame21_init. Process start of a DiceGame21 from here..."
//    ]);
});



Route::get('/diceGame21', function() {
    return view('diceGame21', [
        'header' => "DiceGame21 - MAIN VIEW FOR PLAYING DiceGame21",
        'message' => "You are at route GET /diceGame21. This is the main route for playing the game DiceGame21..."
    ]);
});

Route::post('/diceGame21', function() {
//    process things here...
//    return view('diceGame21', [
//        'header' => "DiceGame21 - MAIN PROCESS ROUTE FOR DiceGame21",
//        'message' => "You are at route POST /diceGame21. Process game play for DiceGame21 here..."
//    ]);
});



Route::get('/diceGame21_select', function() {
    return view('diceGame21_select', [
        'header' => "DiceGame21 - VIEW FOR PLAYERS TO SELECT SCORES IN DiceGame21",
        'message' => "You are at route GET /diceGame21_select. This is the main route for playing the game DiceGame21..."
    ]);
});

Route::post('/diceGame21_select', function() {
//    process things here...
//    return view('diceGame21', [
//        'header' => "DiceGame21 - ROUTE TO PROCESS SELECTION OF SAVING SCORES FOR DiceGame21",
//        'message' => "You are at route POST /diceGame21_select. Process saving scores for player of DiceGame21 here..."
//    ]);
});



Route::get('/diceGame21_result', function() {
    return view('diceGame21_result', [
        'header' => "DiceGame21 - VIEW FOR PLAYERS RESULTS IN DiceGame21",
        'message' => "You are at route GET /diceGame21_result. This is the route for viewing results in the game DiceGame21..."
    ]);
});

Route::post('/diceGame21_result', function() {
//    process things here...
//    return view('diceGame21', [
//        'header' => "DiceGame21 - ROUTE TO PROCESS SELECTION OF SAVING SCORES FOR DiceGame21",
//        'message' => "You are at route POST /diceGame21_result. Process saving scores for player of DiceGame21 here..."
//    ]);
});



/**
 * Yatzy routes
 * --------------------------------------------------
 */
Route::get('/yatzy_init', function () {
    return view('yatzy_init', function() {
        'header' => "Yatzy - ",
        'message' => "",
    });
});
