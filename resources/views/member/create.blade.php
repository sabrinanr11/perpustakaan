@extends('layout.app')
@section('title', 'Add Members')
{{-- <h1>Add Category</h1> --}}

@section('content')

    <form action="{{ route('member.store') }}" method="post">
        @csrf
        {{-- <div class="form-group">
            <label for="">Members</label>
            <select name="category_id" class="form-control" >
                <option value="">Choose Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
            </select>
        </div> --}}
        <div class="form-group">
            <label for="">Member id</label>
            <input class="form-control" type="text" name="member_id">
        </div>
        <div class="form-group">
            <label for="">Nik</label>
            <input class="form-control" type="number" name="nik">
        </div>
        <div class="form-group">
            <label for="">Publisher</label>
            <input class="form-control" type="text" name="publisher">
        </div>
        <div class="form-group">
            <label for="">Publication Year</label>
            <input class="form-control" type="text" name="publication_year">
        </div>
        <div class="form-group">
            <label for="">Author</label>
            <input class="form-control" type="text" name="author">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>
@endsection
