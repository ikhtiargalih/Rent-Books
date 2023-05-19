@extends('layouts.main')

@section('title', 'Edit-User')
@section('content')

<div class="container d-flex justify-content-center">
    <div class="card mt-3" style="width: 800px;">
        <div class="card-header">
            <h3>Users Edit</h3>
        </div>
        <div class="card-body">
            <form action="{{route('users.update', $users->id)}}" method="POST">
                @csrf


                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name"
                        value="{{$users->name}}" name="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email"
                        value="{{$users->email}}" name="email">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="number" class="form-control" id="phone" placeholder="Enter your phone number"
                        value="{{$users->phone}}" name="phone">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea class="form-control" id="address" rows="3" value="{{$users->address}}"
                        name="address"></textarea>
                </div>
                <div class="d-grip gap-2 d-md-flex justify-content-md-start mt-3">
                    <a class="btn btn-secondary btn-sm" href="{{ route('dashboard.users') }}"> Cancel</a>
                    <button type="submit" class="btn btn-primary btn-sm">UPDATE NOW <i
                            class="fa-regular fa-pen-to-square"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
