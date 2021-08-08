<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LibraryController extends Controller
{
    /**
     * @description Method to render view for full library.
     * @return View
     */
    public function viewLibrary():View
    {
        $data = [
            'header' => 'Daniels Library',
            'message' => 'Welcome to a private library of good, exciting, interesting, motivating, advernturus (and much more) books. I hope you like reading them just as I do and if you have any suggestions, please let me know. I like to learn more. ',
            'books' => Book::with('category', 'author', 'publisher')->get(),
        ];

        return view('library', $data);
    }



//    /**
//     * @description Method to render view for a single book.
//     * @return View
//     */
//    public function viewBook():View
//    {
//
//        $data = [
////            'header' => $book->titel,
//            'message' => 'My book blabla bla bla blaaaaa....',
//        ];
//
//        return view('book', $data);
//    }
}
