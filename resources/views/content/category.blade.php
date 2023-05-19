@extends('layouts.main')

@section('title', 'Category')
@section('content')

<div class="container">
    <h3>Create Category</h3>

    <div class="card mt-5 ms-5" style="width: 900px">
        <div class="card-header">
            <h4>Form Category</h4>
        </div>
        <div class="card-body">
        <div class="col-md-12">
            <label for="" class="form-label">Category Name:</label>
            <select name="nama_bank" id="" class="form-select">
                <option value="Nama Bank" hidden></option>
                <option value="Novel">Novel</option>
                <option value="Comic">Comic</option>
                <option value="Fiction">Fiction</option>
                <option value="Romance">Romance</option>
                <option value="Action">Action</option>
                <option value="Comedy">Comedy</option>
                <option value="Horor">Horror</option>
                <option value="History">History</option>
            </select>
        </div>
        </div>
        <div class="d-flex justify-content-center mb-3">
        <button type="button" class="btn btn-primary col-4">Save</button>
        </div>
    </div>
</div>

@endsection
