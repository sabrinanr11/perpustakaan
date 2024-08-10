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
        $member->member_id = $request->member_id;
        $member->nik = $request->nik;
        $member->fullname = $request->fullname;
        $member->address = $request->address;
        $member->number = $request->number;
        $member->email = $request->email;
        $member->username = $request->username;
        $member->password = $request->password;
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
            'member_id' =>$request->member_id,
            'nik' =>$request->nik,
            'fullname' =>$request->fullname,
            'address' =>$request->address,
            'number' =>$request->number,
            'email' =>$request->email,
            'username' =>$request->username,
            'password' =>$request->password,
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
