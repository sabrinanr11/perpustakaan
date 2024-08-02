@extends('layout.app')
@section('title', 'Edit Category')


{{-- <h1>Edit User</h1> --}}
@section('content')

    <form action="{{ route('category.update', $edit->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Nama Lengkap</label>
            <input class="form-control" type="text" name="name" value="{{ $edit->category_name }}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-dark" >Save</button>
            <a href="{{url()->previous()}}">Back</a>
        </div>
    </form>

@endsection
