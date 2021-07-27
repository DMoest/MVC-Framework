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
//Route::get('/diceGame21_init', function() {
//    return view('diceGame21_init', [
//        'header' => "DiceGame21 - A game of dice21 starts here.",
//        'message' => "You are at route GET /diceGame21_init. Start a game DiceGame21 from here..."
//    ]);
//});
//
//Route::post('/diceGame21_init', function() {
////    process things here...
////    return view('diceGame21_init', [
////        'header' => "DiceGame21 - INITIALIZATION",
////        'message' => "You are at route POST /diceGame21_init. Process start of a DiceGame21 from here..."
////    ]);
//});
//
//
//Route::get('/diceGame21', function() {
//    return view('diceGame21', [
//        'header' => "DiceGame21 - MAIN VIEW FOR PLAYING DiceGame21",
//        'message' => "You are at route GET /diceGame21. This is the main route for playing the game DiceGame21..."
//    ]);
//});
//
//Route::post('/diceGame21', function() {
////    process things here...
////    return view('diceGame21', [
////        'header' => "DiceGame21 - MAIN PROCESS ROUTE FOR DiceGame21",
////        'message' => "You are at route POST /diceGame21. Process game play for DiceGame21 here..."
////    ]);
//});
//
//
//Route::get('/diceGame21_result', function() {
//    return view('diceGame21_result', [
//        'header' => "DiceGame21 - VIEW FOR DiceGame21 RESULTS",
//        'message' => "You are at route GET /diceGame21_result. This is the main route for playing the game DiceGame21..."
//    ]);
//});
//
//Route::post('/diceGame21_result', function() {
////    process things here...
////    return view('diceGame21', [
////        'header' => "DiceGame21 - ROUTE TO PROCESS RESULTS FOR DiceGame21",
////        'message' => "You are at route POST /diceGame21_result. Process saving scores for player of DiceGame21 here..."
////    ]);
//});
//
//
//Route::get('/diceGame21_result', function() {
//    return view('diceGame21_result', [
//        'header' => "DiceGame21 - VIEW FOR PLAYERS RESULTS IN DiceGame21",
//        'message' => "You are at route GET /diceGame21_result. This is the route for viewing results in the game DiceGame21..."
//    ]);
//});
//
//Route::post('/diceGame21_result', function() {
////    process things here...
////    return view('diceGame21', [
////        'header' => "DiceGame21 - ROUTE TO PROCESS SELECTION OF SAVING SCORES FOR DiceGame21",
////        'message' => "You are at route POST /diceGame21_result. Process saving scores for player of DiceGame21 here..."
////    ]);
//});



/**
 * Yatzy main route
 * --------------------------------------------------
 */
Route::get('/yatzy', function () {
    return view('yatzy', [
        'header' => "Yatzy - Main view",
        'message' => "You are at route GET /yatzy. This is the render main view route for Yatzy...",
    ]);
});

//Route::post('/yatzy_init', function() {
////    process things here...
////    return view('yatzy', [
////        'header' => "Yatzy - ROUTE TO PROCESS Yatzy",
////        'message' => "You are at route POST /yatzy_init. Process actions for Yatzy here..."
////    ]);
//});


/**
 * Yatzy sub route
 * --------------------------------------------------
 */
Route::get('yatzy/{page}', function ($page) {

    /* render view depending on wildcard {page} */
    if ($page === "init") {
        $thisView = "yatzy_" . $page;

        return view($thisView, [
            'header' => "Yatzy - Main view",
            'message' => "You are at route GET /yatzy. This is the render main view route for Yatzy...",
        ]);
    } elseif ($page === 'select') {
        $thisView = "yatzy_" . $page;

        return view($thisView, [
            'header' => "Yatzy - Select scores view",
            'message' => "You are at route GET /yatzy_select. This is the render view route for Yatzy players to select scores...",
        ]);
    } elseif ($page === 'result') {
        $thisView = "yatzy_" . $page;

        return view($thisView, [
            'header' => "Yatzy - Result view",
            'message' => "You are at route GET /yatzy_result. This is the render view route for Yatzy results...",
        ]);
    }
})->whereAlpha('page'); // wildcard 'page' must be letters and nothing else.

//Route::post('/yatzy', function() {
////    process things here...
//    return view('yatzy', [
//        'header' => "Yatzy - ROUTE TO PROCESS Yatzy",
//        'message' => "You are at route POST /yatzy. Process actions for Yatzy here..."
//    ]);
//});


//Route::get('/yatzy_select', function () {
//    return view('yatzy', [
//        'header' => "Yatzy - Select scores view",
//        'message' => "You are at route GET /yatzy_select. This is the render view route for Yatzy players to select scores...",
//    ]);
//});
//
//Route::post('/yatzy_select', function() {
////    process things here...
////    return view('yatzy', [
////        'header' => "Yatzy - ROUTE TO PROCESS Yatzy",
////        'message' => "You are at route POST /yatzy_select. Process actions for Yatzy here..."
////    ]);
//});
//
//
//Route::get('/yatzy_result', function () {
//    return view('yatzy', [
//        'header' => "Yatzy - Result view",
//        'message' => "You are at route GET /yatzy_result. This is the render view route for Yatzy results...",
//    ]);
//});
//
//Route::post('/yatzy_result', function() {
////    process things here...
////    return view('yatzy', [
////        'header' => "Yatzy - ROUTE TO PROCESS Yatzy",
////        'message' => "You are at route POST /yatzy_result. Process actions for Yatzy here..."
////    ]);
//});
