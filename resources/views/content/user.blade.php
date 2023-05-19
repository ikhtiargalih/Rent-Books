@extends('layouts.main')

@section('title', 'User')
@section('content')

<div class="container">
    <h3> Users Data</h3>

    <table class="table table-striped mt-5">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $dt)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$dt->name}}</td>
                <td>{{$dt->email}}</td>
                <td>{{$dt->phone}}</td>
                <td>{{$dt->address}}</td>
                <td>
                    <form action="{{ route('users.destroy',$dt->id) }}" method="POST">

                        <a class="fa-solid fa-pen btn" href="{{route('users.edit',$dt->id)}}"></a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="fas fa-trash text-danger btn"></button>
                    </form>
                </td>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>

@endsection
