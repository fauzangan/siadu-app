@extends('dashboard.layouts.main')
@section('container')
    <h1 class="mt-4">Golongan VI: Aset Tetap Lainnya</h1>
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

                </tbody>
            </table>
        </div>
    </div>
@endsection
