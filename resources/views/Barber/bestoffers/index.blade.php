@extends('Barber.layouts.barber')

@section('title', 'Best Offer List')

@section('content')
<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Best Offer of the Day</h4>
                <p class="card-description">List of today's best deals.</p>


                {{-- Add Offer --}}
                <div class="d-flex align-items-center justify-content-md-end mb-2">
                    <a href="{{ route('best-offer-day.create') }}" class="btn btn-info btn-rounded btn-fw">
                        Create Offer
                    </a>
                </div>

                {{-- Table --}}
                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Discount (%)</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($offers as $key => $offer)
                            <tr>
                                <td>{{ $offers->firstItem() + $key }}</td>
                                <td>{{ $offer->name }}</td>
                                <td>{{ $offer->discount }}</td>
                                <td>{{ $offer->start_date }}</td>
                                <td>{{ $offer->end_date }}</td>
                                <td>
                                    <a href="{{ route('best-offer-day.edit', $offer) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('best-offer-day.destroy', $offer) }}" method="POST" 
                                          class="d-inline" onsubmit="return confirm('Are you sure to delete this offer?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center">No offers found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- Pagination --}}
                <div class="d-flex justify-content-center mt-3">
                    {{ $offers->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
