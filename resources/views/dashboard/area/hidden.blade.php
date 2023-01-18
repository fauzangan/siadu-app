@extends('dashboard.layouts.main')
@section('container')
    <h1 class="mt-4">Hidden Area </h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col my-auto">
                    <i class="fas fa-table me-1"></i>
                    Hidden Area
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
                                <form action="/dashboard/areas/restore/{{ $area->id_area }}" method="POST"
                                    class="d-inline">
                                    @method('PUT')
                                    @csrf
                                    <input type="text" value=1 name="bit_active" hidden>
                                    <button class="badge bg-success border-0" onclick="return confirm('Are You Sure?')"><i
                                            class="fas fa-eye"></i></button>
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
        $('#area-table').DataTable({
            scrollX: true,
            dom: 'Bfrtip',
            buttons: [
                'pageLength',
            ],
        });
    </script>
@endsection
