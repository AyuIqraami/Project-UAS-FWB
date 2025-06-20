@extends('layouts.admin-guide-Master')

@section('content')
<h2>Tambah Destinasi</h2>
<form action="{{ route('admin.destinasi.store') }}" method="POST">
    @csrf
    <!-- Form input destinasi -->
    <button type="submit">Simpan</button>
</form>
@endsection
