@extends('dashboard.layouts.main')
@section('container')
    <h1 class="mt-4">Aset</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col my-auto">
                    <i class="fas fa-table me-1"></i>
                    Semua Aset
                </div>
                <div class="col-md-auto px-1">
                    <a href="/dashboard/asets/create" class="btn btn-success"><span><i class="fa-solid fa-plus"></i></span>
                        Tambah
                        Aset</a>
                </div>
                <div class="col-md-auto px-1">
                    <a href="/dashboard/asets/hidden" class="btn btn-warning"><span><i class="fa-solid fa-eye-slash"></i></span>
                        Hidden Aset</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="aset-table">
                <thead class="table-dark">
                    <tr>
                        <th>No. </th>
                        <th>Area</th>
                        <th>Golongan</th>
                        <th>Nama Barang</th>
                        <th>Model</th>
                        <th>Seri Pabrik</th>
                        <th>Ukuran</th>
                        <th>Bahan</th>
                        <th>Gambar</th>
                        <th>Tanggal Pembelian</th>
                        <th>Kode Barang</th>
                        <th>Jumlah Barang</th>
                        <th>Harga</th>
                        <th>Keadaan Barang</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if($asets->count()>0)
                    @foreach ($asets as $aset)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $aset->area->nama_area }}</td>
                            <td>{{ $aset->golongan->nama_golongan }}</td>
                            <td>{{ $aset->nama_barang }}</td>
                            <td>{{ $aset->model }}</td>
                            <td>{{ $aset->seri_pabrik }}</td>
                            <td>{{ $aset->ukuran }}</td>
                            <td>{{ $aset->bahan }}</td>
                            <td>gambar</td>
                            <td>{{ $aset->tanggal_pembelian }}</td>
                            <td>{{ $aset->kode_barang }}</td>
                            <td>{{ $aset->jumlah_barang }}</td>
                            <td>Rp. {{ number_format($aset->harga, 2, ',', '.') }}</td>
                            <td>{{ $aset->keadaan_barang }}</td>
                            <td>{{ $aset->keterangan }}</td>
                            <td>
                                <a href="/dashboard/asets/{{ $aset->id_aset }}/edit" class="badge bg-warning"><i class="fas fa-pencil"></i></a>
                                <form action="/dashboard/asets/hidden/{{ $aset->id_aset }}" method="POST"
                                    class="d-inline">
                                    @method('PUT')
                                    @csrf
                                    <input type="text" value=1 name="bit_active" hidden>
                                    <button class="badge bg-success border-0"
                                        onclick="return confirm('Are You Sure?')"><i
                                            class="fas fa-eye"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @endif
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
        $('#aset-table').DataTable({
            scrollX: true,
            dom: 'Bfrtip',
            buttons: [
                'pageLength'
            ],
        });
    </script>
@endsection
