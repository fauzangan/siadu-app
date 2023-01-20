@extends('dashboard.layouts.main')
@section('container')
    <h1 class="mt-4">Daftar Admin </h1>
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
                <div class="col-md-auto px-1">
                    <a href="/dashboard/areas/create" class="btn btn-success"><span><i class="fa-solid fa-plus"></i></span>
                        Tambah
                        Administrator</a>
                </div>
                <div class="col-md-auto px-1">
                    <a href="" class="btn btn-danger"><span><i
                                class="fa-solid fa-eye-slash"></i></span>
                        Deactivated</a>
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
                            <form action="" method="POST"
                                class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Are You Sure?')">Deactive</button>
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
