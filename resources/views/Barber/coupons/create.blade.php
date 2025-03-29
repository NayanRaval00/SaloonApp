@extends('Barber.layouts.barber')

@section('title', 'Create Coupon')

@section('content')
<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create Coupon</h4>
                <p class="card-description">Enter coupon details below.</p>

                <form action="{{ route('barber.coupons.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="code">Coupon Code</label>
                        <input type="text" class="form-control @error('code') is-invalid @enderror" 
                               id="code" name="code" placeholder="Enter coupon code" value="{{ old('code') }}">
                        @error('code')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="discount">Discount</label>
                        <input type="number" step="0.01" class="form-control @error('discount') is-invalid @enderror" 
                               id="discount" name="discount" placeholder="Enter discount amount" value="{{ old('discount') }}">
                        @error('discount')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="expires_at">Expires At</label>
                        <input type="date" class="form-control @error('expires_at') is-invalid @enderror" 
                               id="expires_at" name="expires_at" value="{{ old('expires_at') }}">
                        @error('expires_at')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Save Coupon</button>
                    <a href="{{ route('barber.coupons.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection