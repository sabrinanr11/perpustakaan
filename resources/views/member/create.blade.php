@extends('layout.app')
@section('title', 'Add Members')
{{-- <h1>Add Category</h1> --}}

@section('content')

    <form action="{{ route('member.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">NISN</label>
            <input class="form-control" type="number" name="nisn">
        </div>
        <div class="form-group">
            <label for="">Fullname</label>
            <input class="form-control" type="text" name="fullname">
        </div>
        <div class="form-group">
            <label for="">Phone Number</label>
            <input class="form-control" type="number" name="phone_number">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input class="form-control" type="email" name="email">
        </div>
        {{-- <div class="form-group">
            <label for="">Password</label>
            <input class="form-control" type="password" name="password">
        </div> --}}
        <div class="form-group">
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>
@endsection
