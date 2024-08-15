@extends('layout.app')
@section('title', 'Category Data')

@section('content')

     <!-- <h1>Data User</h1> -->
    <div align="right">
        <a href="{{ route('borrow.create') }}" class="btn btn-primary">Add</a>
    </div>

    <table class="table table-bordered" >
        <thead>
            <tr align="center">
                <th>No</th>
                <th>transaction code</th>
                <th>Member's Name</th>
                <th>Borrowing Date</th>
                <th>Return Date</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($borrows as $key=> $item)
                <tr>
                    <td align="center">{{ $key+1 }}</td>
                    <td>{{$item->transaction_code}}</td>
                    <td>{{$item->member->fullname}}</td>
                    <td>{{date('D, d-m-Y', strtotime($item->borrowing_date)) }}</td>
                    <td>{{date('D, d-m-Y', strtotime($item->return_date)) }}</td>
                    <td>

                        <a href="{{ route('category.edit', $item->id) }}" class="btn btn-info" >Edit</a>
                        <form action="{{ route('borrow.destroy', $item->id) }}" method="post">
                            @csrf
                            <!-- cara ke-1 -->
                            <!-- @method('DELETE') -->
                            <!-- cara ke-2 -->
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        {{-- <!-- <a href="{{ route('user.destroy', $user->id) }}" onclick="return confirm('Apakah anda yakin?')>Delete</a> --> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
