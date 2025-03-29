@extends('Barber.layouts.barber')

@section('title', 'Coupons List')

@section('content')
<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Coupons List</h4>
                <p class="card-description">List of all coupons.</p>
                <div class="d-flex align-items-center justify-content-md-end">
                    <a href="{{ route('barber.coupons.create') }}" class="btn btn-info btn-rounded btn-fw">
                        Create Coupons
                    </a>
                </div>

                @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Code</th>
                                <th>Discount (%)</th>
                                <th>Is Used</th>
                                <th>Expires At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($coupons as $key => $coupon)
                            <tr>
                                <td>{{ $coupons->firstItem() + $key }}</td>
                                <td>{{ $coupon->code }}</td>
                                <td>{{ $coupon->discount }}%</td>
                                <td>{{ $coupon->is_used ? 'Yes' : 'No' }}</td>
                                <td>{{ $coupon->expires_at ? $coupon->expires_at->format('Y-m-d') : 'N/A' }}</td>
                                <td>
                                    <a href="{{ route('barber.coupons.edit', $coupon) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('barber.coupons.destroy', $coupon) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center">No coupons found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-center mt-3">
                    {{ $coupons->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection