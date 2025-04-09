@extends('Barber.layouts.barber')

@section('title', 'Order List')

@section('content')
<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Order List</h4>
                <p class="card-description">List of available orders.</p>


                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Order Number</th>
                                <th>Service Name</th>
                                <th>User Name</th>
                                <th>Duration</th>
                                <th>Date Time</th>
                                <th>Slot Time</th>
                                <th>Price</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $orderItem)
                            <tr>
                                <td>#{{ $orderItem->order->id }}</td>
                                <td>{{ $orderItem->service->name }}</td>
                                <td>{{ $orderItem->order->user->name }}</td>
                                <td>{{ $orderItem->duration }} mins</td>
                                <td>{{ $orderItem->date_time }}</td>
                                <td>{{ $orderItem->slot->slot_time }}</td>
                                <td>₹{{ $orderItem->price }}</td>
                                <td>
                                    @if($orderItem->order->status=='pending')
                                    <label class="badge badge-danger">{{ucfirst($orderItem->order->status)}}</label>
                                    @else
                                    <label class="badge badge-success">{{ucfirst($orderItem->order->status)}}</label>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- Pagination --}}
                <div class="d-flex justify-content-center mt-3">
                    {{ $orders->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection