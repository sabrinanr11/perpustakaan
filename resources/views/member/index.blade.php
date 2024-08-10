@extends('layout.app')
@section('title', 'Members Data')

@section('content')

    <!-- <h1>Data Members</h1> -->
    <div align="right">
        <a href="{{ route('member.create') }}" class="btn btn-primary">Add</a>
    </div>

    <table class="table table-bordered" >
        <thead>
            <tr align="center">
                <th>No</th>
                <th>Member</th>
                <th>NIK</th>
                <th>Fullname</th>
                <th>Address</th>
                <th>Number</th>
                <th>Email</th>
                <th>Username</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $key=> $item)
                <tr>
                    <td align="center">{{ $key+1 }}</td>
                    <td>{{ $item->member_id}}</td>
                    <td>{{ $item->nik}}</td>
                    <td>{{ $item->fullname }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->number }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->username }}</td>
                    <td>
                        <a href="{{ route('member.edit', $item->id) }}" class="btn btn-info" >Edit</a>
                        <form action="{{ route('member.destroy', $item->id) }}" method="post">
                            @csrf
                            <!-- cara ke-1 -->
                            <!-- @method('DELETE') -->
                            <!-- cara ke-2 -->
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
