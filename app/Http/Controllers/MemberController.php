<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::get();
        return view('member.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $member = new Member;
        $member->nisn = $request->nisn;
        $member->fullname = $request->fullname;
        $member->email = $request->email;
        $member->phone_number = $request->phone_number;
        // $member->address = $request->address;
        // $member->username = $request->username;
        // $member->password = $request->password;
        $member->save();

        return redirect()->to('member')->with('message', 'Data berhasil di edit');

        //cara ke dua
        // member::create([
        //     'name' =>$request->name,
        //     'email' =>$request->email,
        //     'password' =>$request->password,
        // ]);

        //cara ke 3
        // Member::create($request->all());

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
        $edit = Member::find($id);
        return view('member.edit', compact('edit'));
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
        Member::where('id', $id)->update([
            'nisn' =>$request->nisn,
            'fullname' =>$request->fullname,
            'email' =>$request->email,
            'phone_number' =>$request->phone_number,

        ]);

            return redirect()->to('member')->with('message', 'Data berhasil di update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return redirect()->to('member')->with('message', 'Data berhasil di hapus');

    }
}
