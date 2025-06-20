@extends('layouts.wisatawanMaster')

@section('content')
<div class="container mt-5">
  <h2 class="mb-4">Booking Guide untuk: {{ $destination->name }}</h2>

  @if ($guides->isEmpty())
    <div class="alert alert-warning">Belum ada guide yang tersedia untuk destinasi ini.</div>
  @else
    <form action="{{ route('booking.store') }}" method="POST">
      @csrf
      <input type="hidden" name="destination_id" value="{{ $destination->id }}">

      <div class="mb-3">
        <label for="guide_id" class="form-label">Pilih Guide</label>
        <select name="guide_id" id="guide_id" class="form-select" required>
          <option value="" disabled selected>-- Pilih Guide --</option>
          @foreach ($guides as $guide)
            <option value="{{ $guide->id }}">
              {{ $guide->user->name }} - Rp{{ number_format($guide->price, 0, ',', '.') }}
            </option>
          @endforeach
        </select>
      </div>

      <div class="mb-3">
        <label for="booking_date" class="form-label">Tanggal Booking</label>
        <input type="date" name="booking_date" id="booking_date" class="form-control" required>
      </div>

      <button type="submit" class="btn btn-success">Submit Booking</button>
      <a href="{{ route('dashboard.wisatawan') }}" class="btn btn-secondary">Kembali</a>
    </form>
  @endif
</div>
@endsection
