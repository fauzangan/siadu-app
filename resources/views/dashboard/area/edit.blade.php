@extends('dashboard.layouts.main')
@section('container')
    <h1 class="mt-4">Edit Area </h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>

    <div class="card mb-4" style="width: 50rem">
        <div class="card-header">
            <i class="fas fa-plus me-1"></i>
            Form Edit Area
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="p-4">
            <form action="/dashboard/areas/{{ $area->id_area }}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="provinsi" class="form-label">Provinsi</label>
                    <input type="text" class="form-control" id="provinsi" name="provinsi" value="{{ $area->provinsi }}">
                </div>
                <div class="mb-3">
                    <label for="kabupaten" class="form-label">Kabupaten</label>
                    <input type="text" class="form-control" id="kabupaten" name="kabupaten"
                        value="{{ $area->kabupaten }}">
                </div>
                <div class="mb-3">
                    <label for="unit" class="form-label">Unit</label>
                    <input type="text" class="form-control" id="unit" name="unit" value="{{ $area->unit }}">
                </div>
                <div class="mb-3">
                    <label for="satuan_kerja" class="form-label">Satuan Kerja</label>
                    <input type="text" class="form-control" id="satuan_kerja" name="satuan_kerja"
                        value="{{ $area->satuan_kerja }}">
                </div>
                <div class="mb-3">
                    <label for="nama_area" class="form-label">Nama Area</label>
                    <input type="text" class="form-control" id="nama_area" name="nama_area"
                        value="{{ $area->nama_area }}">
                </div>
                <div class="mb-3">
                    <label for="kode_lokasi" class="form-label">Kode Lokasi</label>
                    <input type="text" class="form-control" id="kode_lokasi" name="kode_lokasi"
                        value="{{ $area->kode_lokasi }}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
