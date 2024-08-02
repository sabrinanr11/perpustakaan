@extends('layout.app')
@section('title', 'Data User')

@section('content')

    {{-- <h1>Data User</h1> --}}
    <div align="right">
        <a href="{{ route('user.create') }}" class="btn btn-primary">Add</a>
    </div>

    <table class="table table-bordered" >
        <thead>
            <tr align="center">
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $key=> $user)
                <tr>
                    <td align="center">{{ $key+1}}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('user.edit', $user->id) }}" >Edit</a>
                        <form action="{{ route('user.destroy', $user->id) }}" method="post">
                            @csrf
                            <!-- cara ke-1 -->
                            <!-- @method('DELETE') -->
                            <!-- cara ke-2 -->
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit">Delete</button>
                        </form>
                        {{-- <!-- <a href="{{ route('user.destroy', $user->id) }}" onclick="return confirm('Apakah anda yakin?')>Delete</a> --> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
