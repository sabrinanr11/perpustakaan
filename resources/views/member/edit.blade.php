@extends('layout.app')
@section('title', 'Edit Member')


<!-- <h1>Edit User</h1> -->
@section('content')

    <form action="{{route('member.update', $edit->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Member id</label>
            <input class="form-control" type="text" name="member_id" value="{{$edit->member_id}}"  >
        </div>
        <div class="form-group">
            <label for="">NIK</label>
            <input class="form-control" type="number" name="nik"  value="{{$edit->nik}}">
        </div>
        <div class="form-group">
            <label for="">Fullname</label>
            <input class="form-control" type="text" name="fullname" value="{{$edit->fullname}}">
        </div>
        <div class="form-group">
            <label for="">Address</label>
            <input class="form-control" type="text" name="address" value="{{$edit->address}}">
        </div>
        <div class="form-group">
            <label for="">Number</label>
            <input class="form-control" type="number" name="number" value="{{$edit->number}}">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input class="form-control" type="email" name="email" value="{{$edit->email}}">
        </div>
        <div class="form-group">
            <label for="">Username</label>
            <input class="form-control" type="text" name="username" value="{{$edit->username}}">
        </div> <div class="form-group">
            <label for="">Password</label>
            <input class="form-control" type="password" name="password" value="{{$edit->password}}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>

@endsection
