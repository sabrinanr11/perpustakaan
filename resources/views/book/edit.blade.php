@extends('layout.app')
@section('title', 'Edit Book')


{{-- <h1>Edit User</h1> --}}
@section('content')

    <form action="{{route('book.update', $edit->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Category</label>
            <select name="category_id" class="form-control" >
                <option value="{{ $edit->category_id }}">{{ $edit->category->category_name }}</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Title</label>
            <input class="form-control" type="text" name="title" value="{{ $edit->title }}" >
        </div>
        <div class="form-group">
            <label for="">Stock</label>
            <input class="form-control" type="number" name="stock" value="{{ $edit->stock }}" >
        </div>
        <div class="form-group">
            <label for="">Publisher</label>
            <input class="form-control" type="text" name="publisher" value="{{ $edit->publisher }}" >
        </div>
        <div class="form-group">
            <label for="">Publication Year</label>
            <input class="form-control" type="text" name="publication_year" value="{{ $edit->publication_year }}" >
        </div>
        <div class="form-group">
            <label for="">Author</label>
            <input class="form-control" type="text" name="author" value="{{ $edit->author }}" >
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-dark">Save</button>
            <a href="{{url()->previous()}}">Back</a>
        </div>
    </form>

@endsection
