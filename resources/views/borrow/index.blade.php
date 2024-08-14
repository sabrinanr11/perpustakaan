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
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($borrows as $key=> $item)
                <tr>
                    <td align="center">{{ $key+1 }}</td>
                    <td>{{ $item->category_name }}</td>
                    <td>
                        <a href="{{ route('category.edit', $item->id) }}" class="btn btn-info" >Edit</a>
                        <form action="{{ route('category.destroy', $item->id) }}" method="post">
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
