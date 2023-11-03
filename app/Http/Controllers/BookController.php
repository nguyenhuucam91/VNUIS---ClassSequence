<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    private $book;

    //constructor
    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    public function index()
    {
        $books = $this->book->all();
        return view('test.index', ['testsWithDifferentAlias' => $books]);
    }

    public function create()
    {
        return view('test.create');
    }

    public function store(Request $request)
    {
        $this->book->create($request->all());
        return redirect('test');
    }

    public function edit($id, Request $request)
    {
        $test = $this->book->find($id);
        return view('test.edit', ['test' => $test]);
    }

    public function update($id, Request $request)
    {
        $test = $this->book->find($id);
        $test->update($request->input());
        return redirect('test');
    }

    public function delete($id)
    {
        $this->book->destroy($id);
        return redirect('test');
    }
}
