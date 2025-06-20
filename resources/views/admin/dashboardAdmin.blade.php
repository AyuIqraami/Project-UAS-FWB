@extends('layouts.admin-guide-Master')

@extends('layouts.admin') {{-- pastikan layout admin kamu sesuai --}}

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Dashboard Admin</h2>

    <div class="row">
        <!-- Destinasi -->
        <div class="col-md-4 mb-4">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h5>Destinasi Wisata</h5>
                    <h3>{{ $destinationCount }}</h3>
                </div>
            </div>
        </div>

        <!-- Guide -->
        <div class="col-md-4 mb-4">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h5>Total Guide</h5>
                    <h3>{{ $guideCount }}</h3>
                </div>
            </div>
        </div>

        <!-- Booking -->
        <div class="col-md-4 mb-4">
            <div class="card bg-warning text-white">
                <div class="card-body">
                    <h5>Total Booking</h5>
                    <h3>{{ $bookingCount }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
