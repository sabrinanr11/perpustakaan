@extends('layout.app')
@section('title', 'Add User')


@section('content')
{{-- <h1>Add User</h1> --}}
<form action="{{route('user.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="">Nama Lengkap</label>
        <input class="form-control" type="text" name="name">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input class="form-control" type="text" name="email" >
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input class="form-control" type="password" name="password" >
    </div>
    <div class="form-group">
        <button type="submit"  class="btn btn-success" >Save</button>
    </div>
</form>
@endsection
