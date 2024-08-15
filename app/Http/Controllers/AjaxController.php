<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getBookData($category_id)
    {
        $books = Book::where('category_id', $category_id)->get();
        return response()->json(['data'=>$books, 'message'=>'success']);
    }

    public function getBook($book_id){
        try {
            $book = Book::where('id', $book_id)->first();
            // $book = Book::where('id', $book_id)->first();
            // $book = Book::where('id', $book_id)->first();
            return response()->json(['data'=>$book, 'messsage' => 'fetch success']);
        } catch (\Throwable $th) {
            return response()->json(['error'=>$th->getMessage()]);
        }
    }
}
