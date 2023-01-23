@extends('dashboard.layouts.main')
@section('container')
    <h1 class="mt-4">Akun Deaktif </h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col my-auto">
                    <i class="fas fa-table me-1"></i>
                    Administrator
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="area-table">
                <thead class="table-dark">
                    <tr>
                        <th>No. </th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <form action="/dashboard/administrators/restore/{{ $user->id }}" method="POST"
                            class="d-inline">
                            @csrf
                            <button class="btn btn-success border-0"
                                onclick="return confirm('Are You Sure?')">Reactive</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Data Tables --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.1/b-2.3.3/b-colvis-2.3.3/b-html5-2.3.3/b-print-2.3.3/datatables.min.js">
    </script>
    <script>
        $('#area-table').DataTable({});
    </script>
@endsection
