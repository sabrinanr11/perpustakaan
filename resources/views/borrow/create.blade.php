@extends('layout.app')
@section('title', 'Add')
{{-- <h1>Add Category</h1> --}}

@section('content')

    <form action="{{ route('category.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group row ">
                    <div class="col-sm-3">
                        <label for="">Transaction code</label>
                    </div>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" name="transaction_code" readonly>
                    </div>
                </div>
                <div class="form-group row ">
                    <div class="col-sm-3">
                        <label for="">Member's Name</label>
                    </div>
                    <div class="col-sm-6">
                        <select name="" id="" class="form-control">
                            <option value="">Select Member</option>
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="form-group row ">
                    <div class="col-sm-3">
                        <label for="">Borrowing Date</label>
                    </div>
                    <div class="col-sm-6">
                        <input class="form-control" type="date" name="borrowing_date">
                    </div>
                </div>
                <div class="form-group row ">
                    <div class="col-sm-3">
                        <label for="">Return Date</label>
                    </div>
                    <div class="col-sm-6">
                        <input class="form-control" type="date" name="return_date">
                    </div>
                </div>
                {{-- <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="">Category Book</label>
                    </div>
                    <div class="col-sm-6">
                        <select name="" id="category_id" class="form-control">
                            <option value="">Select Category</option>
                            <option value=""></option>
                        </select>
                    </div>
                </div> --}}
            </div>
            <div class="col-sm-6">
            </div>
        </div>
        <div class="form-group row mt-5">
            <div class="col-sm-2">
                <label for="">Category Book</label>
            </div>
            <div class="col-sm-4">
                <select name="" id="category_id" class="form-control">
                    <option value="">Select Category</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">
                <label for="">Book Titles</label>
            </div>
            <div class="col-sm-4">
                <select name="" id="book_id" class="form-control">
                    <option value="">Select Title of Book</option>
                    <option value=""></option>
                </select>
                <input type="hidden" id="publisher">
            </div>
        </div>

        <div class="form-group">
            <div align="right" class="mb-3">
                <button type="button" class="btn btn-success" id="add-row">Add Row</button>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title of Book</th>
                        <th>Publisher</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>



        <div class="form-group">
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>
@endsection
