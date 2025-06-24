@extends('layouts.app')

@section('title', 'Add New Customer')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Add New Customer</h1>
    <form method="POST" action="{{ route('customers.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Phone:</label>
            <input type="text" name="phone" class="form-control">
        </div>
        <div class="form-group">
            <label>Address:</label>
            <textarea name="address" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
    <button href="{{ route('customers.index') }}">Back</button>
</div>
@endsection
