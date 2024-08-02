@extends('layout.app')
@section('title', 'Add Category')
{{-- <h1>Add Category</h1> --}}

@section('content')

    <form action="{{ route('category.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Nama Lengkap</label>
            <input class="form-control" type="text" name="category_name">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>
@endsection
