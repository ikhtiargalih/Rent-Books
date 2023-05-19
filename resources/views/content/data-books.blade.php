@extends('layouts.main')

@section('title', 'Books')
@section('content')

<div class="container">
    <h3> Edit Books</h3>

    <table class="table table-striped mt-5">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Writer</th>
                <th>Publisher</th>
                <th>Cover</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->writer}}</td>
                <td>{{$book->publisher}}</td>
                <td><img style="width:50px; "src="{{asset("img/". $book->cover)}}"></td>
                <td>
                    <form action="{{ route('books.destroy',$book->id) }}" method="POST">

                        <a class="fa-solid fa-pen btn" href="{{route('books.edit',$book->id)}}"></a>

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
