@extends('layouts.app')

@section('title', 'Main Page')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Main Page</h1>
    <div class="d-flex justify-content-around">
        <a href="{{ route('customers.index') }}" class="btn btn-primary btn-lg">Customers</a>
        <a href="{{ route('orders.index') }}" class="btn btn-primary btn-lg">Orders</a>
    </div>
</div>
@endsection
