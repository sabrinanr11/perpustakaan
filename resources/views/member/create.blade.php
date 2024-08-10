@extends('layout.app')
@section('title', 'Add Members')
{{-- <h1>Add Category</h1> --}}

@section('content')

    <form action="{{ route('member.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Member id</label>
            <input class="form-control" type="text" name="member_id">
        </div>
        <div class="form-group">
            <label for="">Nik</label>
            <input class="form-control" type="number" name="nik">
        </div>
        <div class="form-group">
            <label for="">Fullname</label>
            <input class="form-control" type="text" name="fullname">
        </div>
        <div class="form-group">
            <label for="">Address</label>
            <input class="form-control" type="text" name="address">
        </div>
        <div class="form-group">
            <label for="">Number</label>
            <input class="form-control" type="number" name="number">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input class="form-control" type="email" name="email">
        </div>
        <div class="form-group">
            <label for="">Username</label>
            <input class="form-control" type="text" name="username">
        </div> <div class="form-group">
            <label for="">Password</label>
            <input class="form-control" type="password" name="password">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>
@endsection
