@extends('dashboard.layouts.main')
@section('container')
    <h1 class="mt-4">Daftar Area </h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col my-auto">
                    <i class="fas fa-table me-1"></i>
                    Area
                </div>
                <div class="col-md-auto px-1">
                    <a href="/dashboard/areas/create" class="btn btn-success"><span><i class="fa-solid fa-plus"></i></span>
                        Tambah
                        Area</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="area-table">
                <thead class="table-dark">
                    <tr>
                        <th>No. </th>
                        <th>Provinsi</th>
                        <th>Kabupaten</th>
                        <th>Unit</th>
                        <th>Satuan Kerja</th>
                        <th>Nama Area</th>
                        <th>Kode Lokasi</th>
                        <th>Jumlah Aset</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($areas as $area)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $area->provinsi }}</td>
                            <td>{{ $area->kabupaten }}</td>
                            <td>{{ $area->unit }}</td>
                            <td>{{ $area->satuan_kerja }}</td>
                            <td>{{ $area->nama_area }}</td>
                            <td>{{ $area->kode_lokasi }}</td>
                            <td>{{ count($area->aset) }}</td>
                            <td>
                                <a href="/dashboard/areas/{{ $area->id_area }}" class="badge bg-info"><i
                                        class="fas fa-arrow-right"></i></a>
                                <a href="/dashboard/areas/{{ $area->id_area }}/edit" class="badge bg-warning"><i
                                        class="fas fa-pencil"></i></a>
                                {{-- <form action="/dashboard/areas/hidden/{{ $area->id_area }}" method="POST"
                                    class="d-inline">
                                    @method('PUT')
                                    @csrf
                                    <input type="text" value=0 name="bit_active" hidden>
                                    <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')"><i
                                            class="fas fa-eye-slash"></i></button>
                                </form> --}}
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
        $('#area-table').DataTable({
            scrollX: true,
            dom: 'Bfrtip',
            buttons: [
                'pageLength',
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7]
                    }
                },
                {
                    extend: 'csv',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7]
                    }
                },
                {
                    extend: 'pdf',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7]
                    }
                }
            ],
        });
    </script>
@endsection
