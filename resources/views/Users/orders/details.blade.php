@extends('Users.layouts.user')

@section('title', 'Order Details')

@section('content')
<main class="main">
    <section id="services" class="services section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Order Details</h2>
            <p>Details of your order #{{ $order->id }}</p>
        </div>

        <div class="container mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th>Service</th>
                        <th>Barber</th>
                        <th>Duration</th>
                        <th>Price</th>
                        <th>Date & Time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order->items as $item)
                    <tr>
                        <td>{{ $item->service->name }}</td>
                        <td>{{ $item->service->barber->saloon_name }}</td>
                        <td>{{ $item->duration }} hrs</td>
                        <td>₹{{ $item->price }}</td>
                        <td>{{ $item->date_time }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="text-end mt-4">
                <h5>Total Price: ₹{{ $order->total_price }}</h5>
                <h6>Status: <span class="badge bg-primary">{{ ucfirst($order->status) }}</span></h6>
            </div>
        </div>
    </section>
</main>
@endsection
