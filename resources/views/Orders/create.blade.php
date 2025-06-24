@extends('layouts.app')

@section('title', 'Add New Order')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Add New Order</h1>
    <form method="POST" action="{{ route('orders.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Customer:</label>
            <select name="customer_id" class="form-control" required>
                @foreach($customers as $customer)
                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>PC Specifications:</label>
            <textarea name="pc_specifications" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label>Total Price:</label>
            <input type="number" name="total_price" class="form-control" step="0.01" required>
        </div>
        <div class="form-group">
            <label>Status:</label>
            <select name="status" class="form-control" required>
                <option value="pending">Pending</option>
                <option value="completed">Completed</option>
                <option value="cancelled">Cancelled</option>
            </select>
        </div>
        <div class="form-group">
            <label>Upload Image:</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('orders.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
