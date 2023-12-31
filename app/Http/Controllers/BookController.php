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

    //A dummy method
    public function dummy(FileService $fileService)
    {
        //Code to use $fileService
    }

    //A store method, similar to store() with error
    public function fakeStore(Request $request)
    {
        $result = $this->book->create(['a' => 1, 'b' => 2]);
        if (!$result) {
            return abort(500);
        }
        return redirect('test');
    }

    //Return  list of books
    public function index()
    {
        $books = $this->book->all();
        return view('test.index', ['testsWithDifferentAlias' => $books]);
    }

    //Present view for creation before hand
    public function fakeCreate()
    {
        return view('test.fake-create');
    }

    //Present view for creation before hand
    public function create()
    {
        return view('test.create');
    }

    //Store data after user inputs and clicks submit on Insert new data
    public function store(Request $request)
    {
        $this->book->create($request->all());
        return redirect('test');
    }

    //Present view for editing
    public function edit($id)
    {
        $test = $this->book->find($id);
        return view('test.edit', ['test' => $test]);
    }

    //Store data after user inputs and click Submit on Update existing data
    public function update($id, Request $request)
    {
        $test = $this->book->find($id);
        $test->update($request->input());
        return redirect('test');
    }

    //Delete record
    public function delete($id)
    {
        $this->book->destroy($id);
        return redirect('test');
    }
}
