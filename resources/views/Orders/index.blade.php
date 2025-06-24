@extends('layouts.app')

@section('title', 'Orders')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Orders List</h1>
    <a href="{{ route('orders.create') }}" class="btn btn-primary mb-3">Add New Order</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Customer</th>
                <th>PC Specifications</th>
                <th>Total Price</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td><a href="{{ route('customers.show', $order->customer->id) }}">{{ $order->customer->name }}</a></td>
                <td>{{ $order->pc_specifications }}</td>
                <td>{{ $order->total_price }}</td>
                <td>{{ $order->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ url('/main') }}" class="btn btn-secondary mt-3">Back to Main Page</a>
</div>
@endsection
