@extends('layout.app')
@section('title', 'Edit User')
@section('content')

<h1>Edit User</h1>
<form action="{{route('user.update', $edit->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="">Nama Lengkap</label>
        <input class="form-control" type="text" name="name" value="{{$edit->name}}">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input class="form-control" type="text" name="email" value="{{$edit->email}}">
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input class="form-control" type="password" name="password">
    </div>
    <div class="form-group">
        <button type="submit">Save</button>
    </div>
</form>
@endsection
