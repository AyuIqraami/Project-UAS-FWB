@extends('layouts.wisatawanMaster')

@section('content')
<section class="section">
  <div class="container">
    <h2 class="mb-4">Selamat datang, {{ Auth::user()->name }}!</h2>
    <p>Explore SulBar siap menemani perjalananmu menjelajahi Sulawesi Barat 🌴</p>

    <div class="row mt-4">
      <div class="col-md-4">
        <div class="card shadow border-0 rounded-4 text-white" style="background-color: #8B5E3C;">
          <div class="card-body text-center py-4">
            <h5 class="card-title fs-5">Total Wisata</h5>
            <p class="card-text fs-4 fw-semibold">{{ $jumlahDestinasi }} tempat</p>
            <i class="bi bi-map-fill fs-1"></i>
          </div>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="card shadow border-0 rounded-4 text-white" style="background-color: #A47148;">
          <div class="card-body text-center py-4">
            <h5 class="card-title fs-5">Booking Saya</h5>
            <p class="card-text fs-4 fw-semibold">{{ $jumlahBooking }} pesanan</p>
            <i class="bi bi-calendar-check-fill fs-1"></i>
          </div>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="card shadow border-0 rounded-4 text-white" style="background-color: #C69C6D;">
          <div class="card-body text-center py-4">
            <h5 class="card-title fs-5">Guide Tersedia</h5>
            <p class="card-text fs-4 fw-semibold">{{ $jumlahGuide }} guide</p>
            <i class="bi bi-person-lines-fill fs-1"></i>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
