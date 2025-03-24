@extends('Users.web.layouts.user')

@section('title', 'Order')

@section('content')
<main class="main">
    <section id="services" class="services section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Your Order</h2>
            <p>Your Order List<br></p>
        </div>

        <div class="container mt-5">

            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if($orders->isEmpty())
            <p class="text-center">Your Order is empty.</p>
            @else

            <table class="table">
                <thead>
                    <tr>
                        <th>Order Id</th>
                        <th>Total Price</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>#{{ $order->id }}</td>
                        <td>₹{{ $order->total_price }}</td>
                        <td>{{ ucfirst($order->status) }}</td>
                        <td>
                            <a href="{{ route('order.details', $order->id) }}" class="btn btn-info btn-sm">View Details</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>



            @endif
        </div>
    </section>
</main>
@endsection