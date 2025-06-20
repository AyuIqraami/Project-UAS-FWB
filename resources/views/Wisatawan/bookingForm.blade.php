@extends('layouts.wisatawanMaster')

@section('content')
<section class="section">
  <div class="container">
    <h2>Booking Guide untuk {{ $destination->name }}</h2>

    <form action="{{ route('wisatawan.booking.store') }}" method="POST">
      @csrf

      <input type="hidden" name="destination_id" value="{{ $destination->id }}">

      <div class="mb-3">
        <label for="guide_id" class="form-label">Pilih Guide</label>
        <select name="guide_id" id="guide_id" class="form-control" required>
          <option value="">-- Pilih Guide --</option>
          @foreach($guides as $guide)
            <option value="{{ $guide->id }}">{{ $guide->user->name }}</option>
          @endforeach
        </select>
      </div>

      <div class="mb-3">
        <label for="booking_date" class="form-label">Tanggal Booking</label>
        <input type="date" name="booking_date" class="form-control" required>
      </div>

      <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
    </form>
  </div>
</section>
@endsection
