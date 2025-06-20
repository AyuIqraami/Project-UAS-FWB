@extends('layouts.admin-guide-Master')

@section('content')
<h2>Edit Destinasi</h2>
<form action="{{ route('admin.destinasi.update', $destinasi->id) }}" method="POST">
    @csrf
    @method('PUT')
    <!-- Form edit destinasi -->
    <button type="submit">Update</button>
</form>
@endsection
