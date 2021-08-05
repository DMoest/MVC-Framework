<?php

use App\Models\Book;
use App\Models\Author;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\YatzyController;
use App\Http\Controllers\DiceGame21Controller;
use App\Http\Controllers\LibraryController;

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
})->name('index');



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
})->name('hello-world');
Route::get('/hello', [HelloWorldController::class, 'hello'])->name('hello');
Route::get('/hello/{message}', [HelloWorldController::class, 'hello']);

Route::get('/form', [FormController::class, 'index'])->name('form');
Route::post('/form/process', [FormController::class, 'process']);
Route::get('/form/view', [FormController::class, 'view']);



/**
 * Yatzy routes
 * --------------------------------------------------
 */
Route::get('/yatzy/init/view', [YatzyController::class, 'viewInit'])->name('yatzyInitView');
Route::post('/yatzy/init/process', [YatzyController::class, 'processInit'])->name('yatzyInitProcess');

Route::get('/yatzy/view', [YatzyController::class, 'viewMain'])->name('yatzyMainView');
Route::post('/yatzy/process', [YatzyController::class, 'processMain'])->name('yatzyMainProcess');

Route::get('/yatzy/select/view', [YatzyController::class, 'viewSelect'])->name('yatzySelectView');
Route::post('/yatzy/select/process', [YatzyController::class, 'processSelect'])->name('yatzySelectProcess');

Route::get('/yatzy/result/view', [YatzyController::class, 'viewResult'])->name('yatzyResultView');
Route::post('/yatzy/result/process', [YatzyController::class, 'processResult'])->name('yatzyResultProcess');



/**
 * DiceGame21 routes
 * --------------------------------------------------
 */
Route::get('/dice/init/view', [DiceGame21Controller::class, 'viewInit'])->name('diceInitView');
Route::post('/dice/init/process', [DiceGame21Controller::class, 'processInit'])->name('diceInitProcess');

Route::get('/dice/view', [DiceGame21Controller::class, 'viewMain'])->name('diceMainView');
Route::post('/dice/process', [DiceGame21Controller::class, 'processMain'])->name('diceMainProcess');

Route::get('/dice/result/view', [DiceGame21Controller::class, 'viewResult'])->name('diceResultView');
Route::post('/dice/result/process', [DiceGame21Controller::class, 'processResult'])->name('diceResultProcess');



/**
 * Library route
 * --------------------------------------------------
 */
Route::get('/library', [LibraryController::class, 'viewLibrary'])->name('library');

Route::get('/book/{book:id}', function(Book $book) {   //Book::where('id', $book)->firstOrFail()
        return view('book', [
            'book' => $book,
        ]);
    })->name('book');

Route::get('/author/{author:id}', function(Author $author) {   //Book::where('id', $author)->firstOrFail()
    return view('author', [
        'author' => $author,
        'books' => $author->books,
    ]);
})->name('author');
