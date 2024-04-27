<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book; 

class BookController extends Controller
{
    
    public function index()
    {
       
        $books = Book::all();
        return response()->json($books, 200);
    }

    
    public function create()
    {
        return view('books.create');
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'author' => 'required',
            
        ]);

        Book::create($validatedData);

        return redirect()->route('books.index')
                         ->with('success','Book created successfully.');
    }

    
    public function show(Book $book)
    {
        return view('books.show',compact('book'));
    }

    
    public function edit(Book $book)
    {
        return view('books.edit',compact('book'));
    }

    
    public function update(Request $request, Book $book)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'author' => 'required',
            
        ]);

        $book->update($validatedData);

        return redirect()->route('books.index')
                         ->with('success','Book updated successfully');
    }

    
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')
                         ->with('success','Book deleted successfully');
    }
}
