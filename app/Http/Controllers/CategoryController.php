<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //select * from user
        // return User::get();
        // return view['user.index'];

        $datas = Category::get();
        return view('category.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category;
        $category->category_name = $request->category_name;
        $category->save();


        //cara ke dua
        // User::create([
        //     'name' =>$request->name,
        //     'email' =>$request->email,
        //     'password' =>$request->password,
        // ]);

        //cara ke 3
        // User::create($request->all());

        return redirect()->to('category')->with('message', 'Data berhasil di edit');
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
        // $edit = User::where('id', $id)->first();
        $edit = Category::find($id);
        return view('category.edit', compact('edit'));
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
        // if ($request->post){
        //     $password = $request->password
        // }

        $category = Category::find($id);
        //cara ke-1
        Category::where('id', $id)->update([
            'category_name' => $request->category_name,

        ]);

        //cara ke-2
        // $user = User::find($id);
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;
        // $user->save()

        return redirect()->to('category')->with('message', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->to('category')->with('message', 'Data berhasil di hapus');
    }
}
