<!-- resources/views/admin/guide/index.blade.php -->
@extends('layouts.admin-guide-Master')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h4">Kelola Guide</h1>
        <a href="#" class="btn btn-primary">Tambah Guide</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Bio</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($guides as $guide)
                <tr>
                    <td>{{ $guide->user->name }}</td>
                    <td>{{ Str::limit($guide->bio, 50) }}</td>
                    <td>Rp {{ number_format($guide->price) }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-warning">Edit</a>
                        <form action="#" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection