@extends('Admin.layouts.admin')

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
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td>#{{ $order->id }}</td>
                                <td>₹{{ $order->total_price }}</td>
                                <td>{{ ucfirst($order->status) }}</td>
                                <td>
                                    @if($order->status == 'pending')
                                    <form action="{{ route('admin.orders.approve', $order->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-success btn-sm">Approve</button>
                                    </form>
                                    @else
                                    <span class="badge bg-success">Confirmed</span>
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