@extends('layouts.main')

@section('title', 'Edit-Books')
@section('content')

<div class="container d-flex justify-content-center">
    <div class="card mt-3" style="width: 800px;">
        <div class="card-header">
            <h3>Books Edit</h3>
        </div>
        <div class="card-body">
            <form action="{{route('books.update', $books->id)}}" method="POST">
                @csrf


                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter the title"
                        value="{{$books->title}}" name="title">
                </div>
                <div class="mb-3">
                    <label for="writer" class="form-label">Writer</label>
                    <input type="writer" class="form-control" id="writer" placeholder="Enter the writer"
                        value="{{$books->writer}}" name="writer">
                </div>
                <div class="mb-3">
                    <label for="publisher" class="form-label">Publisher</label>
                    <input type="number" class="form-control" id="publisher" placeholder="Enter the publisher"
                        value="{{$books->publisher}}" name="publisher">
                </div>
                <div class="mb-3">
                    <label for="cover" class="form-label">Cover</label>
                    <textarea class="form-control" id="cover" rows="3" value="{{$books->cover}}"
                        name="cover"></textarea>
                </div>
                <div class="d-grip gap-2 d-md-flex justify-content-md-start mt-3">
                    <a class="btn btn-secondary btn-sm" href="{{ route('books.edit') }}"> Cancel</a>
                    <button type="submit" class="btn btn-primary btn-sm">UPDATE NOW <i
                            class="fa-regular fa-pen-to-square"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
