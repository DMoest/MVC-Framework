<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;



/**
 * Class LibraryController.
 */
class LibraryController extends Controller
{
    public function view():View
    {
        $data = [
            'header' => 'Daniels Library',
            'message' => 'Welcome to a private library of good, exciting, interesting, motivating, advernturus (and much more) books. I hope you like reading them just as I do and if you have any suggestions, please let me know. I like to learn more. '
        ];

        return view('library', $data);
    }
}
