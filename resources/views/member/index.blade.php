@extends('layout.app')
@section('title', 'Books Data')

@section('content')

    {{-- <h1>Data User</h1> --}}
    <div align="right">
        <a href="{{ route('book.create') }}" class="btn btn-primary">Add</a>
    </div>

    <table class="table table-bordered" >
        <thead>
            <tr align="center">
                <th>No</th>
                <th>Category</th>
                <th>Title</th>
                <th>Stock</th>
                <th>Publisher</th>
                <th>Publication Year</th>
                <th>Author</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $key=> $item)
                <tr>
                    <td align="center">{{ $key+1 }}</td>
                    <td>{{ $item->category->category_name }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->stock }}</td>
                    <td>{{ $item->publisher }}</td>
                    <td>{{ $item->publication_year }}</td>
                    <td>{{ $item->author }}</td>


                    <td>
                        <a href="{{ route('book.edit', $item->id) }}" class="btn btn-info" >Edit</a>
                        <form action="{{ route('book.destroy', $item->id) }}" method="post">
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
