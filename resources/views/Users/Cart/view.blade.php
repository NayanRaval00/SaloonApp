@extends('Users.layouts.user')

@section('title', 'Cart')

@section('content')
<main class="main">
<section id="services" class="services section">
<div class="container section-title" data-aos="fade-up">
            <h2>Your Cart</h2>
            <p>Your Cart List<br></p>
        </div><!-- End Section Title -->

<div class="container mt-5">
    
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($cartItems->isEmpty())
    <p class="text-center">Your cart is empty.</p>
    @else
    <table class="table">
        <thead>
            <tr>
                <th>Service</th>
                <th>Duration (hrs)</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cartItems as $item)
            <tr>
                <td>{{ $item->service->name }}</td>
                <td>{{ $item->duration }}</td>
                <td>₹{{ $item->price }}</td>
                <td>
                    <a href="" class="btn btn-danger btn-sm">Remove</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('checkout') }}" class="btn btn-success">Proceed to Checkout</a>
    @endif
</div>
</main>
</section>
@endsection