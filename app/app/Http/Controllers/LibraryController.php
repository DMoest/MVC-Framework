<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Author;
use App\Models\Publisher;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;


class LibraryController extends Controller
{
    /**
     * @description Method to render view for full library.
     * @return Application|Factory|View
     */
    final public function viewLibrary(): Application|Factory|View
    {
        $data = [
            'header' => 'Daniels Library',
            'message' => 'Welcome to a private library of good, exciting, interesting, motivating, advernturus (and much more) books. I hope you like reading them just as I do and if you have any suggestions, please let me know. I like to learn more. ',
            'books' => Book::with('category', 'author', 'publisher')->get(),
        ];

        return view('library', $data);
    }


    /**
     * @description Method to render view for a single book.
     * @param Book $book
     * @return Application|Factory|View
     */
    final public function viewBook(Book $book): Application|Factory|View
    {
        return view('book', [
            'book' => $book,
        ]);
    }


    /**
     * @description Method to render view for a single book.
     * @param Category $category
     * @return Application|Factory|View
     */
    final public function viewCategory(Category $category): Application|Factory|View
    {
        return view('category', [
            'category' => $category,
            'books' => $category->books->load('author', 'publisher'),
        ]);
    }


    /**
     * @description Methor to render view for an Author of books.
     * @param Author $author
     * @return Application|Factory|View
     */
    final public function viewAuthor(Author $author): Application|Factory|View
    {
        return view('author', [
            'author' => $author,
            'books' => $author->books->load('category', 'publisher'),
        ]);
    }


    /**
     * @description Method to render view for a Publisher.
     * @param Publisher $publisher
     * @return Application|Factory|View
     */
    final public function viewPublisher(Publisher $publisher): Application|Factory|View
    {
        return view('publisher', [
            'publisher' => $publisher,
            'authors' => $publisher->authors->load('books'),
            'books' => $publisher->books->load('author', 'category'),
        ]);
    }
}
