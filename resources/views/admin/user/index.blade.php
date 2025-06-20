@extends('layouts.admin-guide-Master')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h4">Kelola User</h1>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
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