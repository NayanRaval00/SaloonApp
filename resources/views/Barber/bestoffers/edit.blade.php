@extends('Barber.layouts.barber')

@section('title', 'Edit Offer')

@section('content')

<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Offer</h4>

                <form action="{{ route('best-offer-day.update', $bestOffers) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @include('Barber.bestoffers.form', ['offer' => $bestOffers])
                </form>
            </div>
        </div>
    </div>
</div>
@endsection