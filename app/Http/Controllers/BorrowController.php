<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use App\Models\BorrowingDetail;
use App\Models\Category;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \RealRashid\SweetAlert\Facades\Alert;

class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $borrows = Borrow::with('member')->get();
        return view('borrow.index', compact('borrows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        $members = Member::get();
        $unique_code = Borrow::get()->last();
        $borrow_id = isset($unique_code->id) ? ($unique_code->id == "" ? 1 : $unique_code->id) : '';
        $borrow_id++;
        $transaction_code = "BRW" . date("dmY") . sprintf("%03s", $borrow_id);
        return view('borrow.create', compact('categories','members','transaction_code'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $borrows=Borrow::create([
            'transaction_code' =>$request->transaction_code,
            'member_id' =>$request->member_id,
            'borrowing_date' =>$request->borrowing_date,
            'return_date' =>$request->return_date,
            // 'operator' =>Auth::user()->name,
            'operator' =>(Auth::user()->name ?? 'Sabrina'),
        ]);

        if ($borrows){
            foreach ($request->book_id as $key => $val){
             BorrowingDetail::create([
                'book_id' => $val,
                'borrow_id' =>$borrows->id,
            ]);
            }
        }
        Alert::success('NICE', 'Message');
        return redirect()->to('borrow')->with('message', 'Data berhasil');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function show(Borrow $borrow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function edit(Borrow $borrow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Borrow $borrow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Borrow $borrow)
    {
        //
    }
}
