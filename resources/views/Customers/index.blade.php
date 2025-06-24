@extends('layouts.app')

@section('title', 'Customers')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Customer List</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>
                    <a href="{{ route('create', $customer->id) }}" class="btn btn-info">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ url('/main') }}" class="btn btn-secondary mt-3">Back to Main Page</a>
</div>
@endsection
