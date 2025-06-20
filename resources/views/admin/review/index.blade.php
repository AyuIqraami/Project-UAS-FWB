<!-- resources/views/admin/review/index.blade.php -->
@extends('layouts.admin-guide-Master')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h4">Kelola Review</h1>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Wisatawan</th>
                <th>Guide</th>
                <th>Komentar</th>
                <th>Rating</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reviews as $review)
                <tr>
                    <td>{{ $review->user->name }}</td>
                    <td>{{ $review->guide->user->name }}</td>
                    <td>{{ $review->komentar }}</td>
                    <td>{{ $review->rating }}</td>
                    <td>
                        <form action="#" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus review ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
