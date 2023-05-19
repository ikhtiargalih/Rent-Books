@extends('layouts.main')

@section('title', 'books')
@section('content')

<div class="container">
    <h3>Create Book</h3>

    <div class="card mt-5 ms-5 mb-3" style="width: 900px;">
        <div class="card-header">
            <h4>Form Create Books</h4>
        </div>
        <div class="card-body">
            <form action="{{route('booksCreate')}}" method="POST">
                @csrf


                <div class="col-md-12 mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter the title" name="title">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="writer" class="form-label">Writer</label>
                    <input type="writer" class="form-control" id="writer" placeholder="Enter the writer" name="writer">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="publisher" class="form-label">Publisher</label>
                    <input type="text" class="form-control" id="publisher" placeholder="Enter the publisher" name="publisher">
                </div>
                <div class="mb-3 col-md-12">
                        <label for="formFile" class="form-label">Cover</label>
                        <input class="form-control" type="file" id="formFile" name="cover">
                    </div>
                <div class="d-flex justify-content-center mt-3">
                    <button type="submit" class="btn btn-primary col-6">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
