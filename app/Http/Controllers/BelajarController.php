<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "xixixi";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "halaman create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return "halaman edit dengan nama param " . $id;
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function add()
    {
        $total = 0;
        return view('add', compact('total'));
    }

    public function addStore(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;

        $total = $angka1 + $angka2;
        return view('add', compact('total'));
        // return "The sum is " . $total;

    }

    public function kurang()
    {
        $total = 0;
        return view('kurang', compact('total'));
    }

    public function storeKurang(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;

        $total = $angka1 - $angka2;
        return view('kurang', compact('total'));
        // return "The sum is " . $total;
    }
}
