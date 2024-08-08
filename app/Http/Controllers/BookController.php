<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $books = Book::with('category')->get();      //untuk memunculkan category
        $books = Book::get();

        return view('book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('book.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book;
        $book->category_id =$request->category_id;
        $book->title = $request->title;
        $book->stock = $request->stock;
        $book->publisher = $request->publisher;
        $book->publication_year = $request->publication_year;
        $book->author = $request->author;
        $book->save();

        return redirect()->to('book')->with('message', 'Data berhasil di edit');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Book::find($id);
        $categories = Category::get();
        return view('book.edit', compact('edit','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $book = Book::find($id); //untuk password
        //cara ke-1
        Book::where('id', $id)->update([
            'category_id' =>$request->category_id,
            'title' =>$request->title,
            'stock' =>$request->stock,
            'publisher' =>$request->publisher,
            'publication_year' =>$request->publication_year,
            'author' =>$request->author,


        ]);

        return redirect()->to('book')->with('message', 'Data berhasil di update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $book = Book::find($id)->delete();
        return redirect()->to('book')->with('message', 'Data berhasil di hapus');
    }
}
