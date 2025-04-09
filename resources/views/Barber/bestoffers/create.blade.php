@extends('Barber.layouts.barber')

@section('title', 'Create Offer')

@section('content')
<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create Offer</h4>

                <form action="{{ route('best-offer-day.store') }}" method="POST" enctype="multipart/form-data">
                    @include('Barber.bestoffers.form')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection