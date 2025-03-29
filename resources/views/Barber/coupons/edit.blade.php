@extends('Barber.layouts.barber')

@section('title', 'Edit Coupon')

@section('content')
<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Coupon</h4>
                <p class="card-description">Update coupon details below.</p>

                <form action="{{ route('barber.coupons.update', $coupon) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="code">Coupon Code</label>
                        <input type="text" class="form-control @error('code') is-invalid @enderror" 
                               id="code" name="code" placeholder="Enter coupon code" value="{{ old('code', $coupon->code) }}">
                        @error('code')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="discount">Discount</label>
                        <input type="number" step="0.01" class="form-control @error('discount') is-invalid @enderror" 
                               id="discount" name="discount" placeholder="Enter discount amount" value="{{ old('discount', $coupon->discount) }}">
                        @error('discount')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        `is_used` <label for="expires_at">Expires At</label>
                        <input type="date" class="form-control @error('expires_at') is-invalid @enderror" 
                               id="expires_at" name="expires_at" value="{{ old('expires_at', $coupon->expires_at ? $coupon->expires_at->format('Y-m-d') : '') }}">
                        @error('expires_at')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Update Coupon</button>
                    <a href="{{ route('barber.coupons.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection