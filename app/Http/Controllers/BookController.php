<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getCreatePage()
    {
        $genres = Genre::all();
        return view('create', ['genres' => $genres]);
    }

    public function createBook(BookRequest $request)
    {

        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'release' => $request->release,
            'price' => $request->price,
            'genreId' => $request->genreId
        ]);

        return redirect(route('getBooks'));
    }

    public function getBooks()
    {
        $books = Book::all();
        return view('view', ['books' => $books]);
    }


    public function getBookById($id)
    {
        $book = Book::find($id);
        // dd($book);
        return view('update', ['book' => $book]);
    }

    public function updateBook(BookRequest $request, $id)
    {
        $book = Book::find($id);

        // Cara pertama:
        // $book ->title = $request->title;
        // $book ->author = $request->author;
        // $book ->release = $request->release;
        // $book ->price = $request->price;

        // $book->save();

        // Cara kedua:
        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'release' => $request->release,
            'price' => $request->price,
        ]);

        return redirect(route('getBooks'));
    }

    public function deleteBook($id)
    {
        Book::destroy($id);
        return redirect(route('getBooks'));
    }
}
