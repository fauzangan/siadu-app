@extends('dashboard.layouts.main')
@section('container')
    <h1 class="mt-4">Tambah Aset </h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>

    <div class="card mb-4" style="width: 50rem">
        <div class="card-header">
            <i class="fas fa-plus me-1"></i>
            Form Tambah Aset
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
            <form action="/dashboard/asets" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="id_area" class="form-label">Area</label>
                    <select class="form-select" id="id_area" name="id_area">
                        <option selected disabled>
                            <h5 class="text-muted">Pilih Area</h5>
                        </option>
                        @foreach ($areas as $area)
                            <option value="{{ $area->id_area }}">{{ $area->nama_area }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="id_golongan" class="form-label">Golongan</label>
                    <select class="form-select" id="id_golongan" name="id_golongan">
                        <option selected disabled>
                            <h5 class="text-muted">Pilih Golongan</h5>
                        </option>
                        @foreach ($golongans as $golongan)
                            <option value="{{ $golongan->id_golongan }}">{{ $golongan->nama_golongan }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                </div>
                <div class="mb-3">
                    <label for="model" class="form-label">Model</label>
                    <input type="text" class="form-control" id="model" name="model">
                </div>
                <div class="mb-3">
                    <label for="seri_pabrik" class="form-label">Seri Pabrik</label>
                    <input type="text" class="form-control" id="seri_pabrik" name="seri_pabrik">
                </div>
                <div class="mb-3">
                    <label for="ukuran" class="form-label">Ukuran</label>
                    <input type="text" class="form-control" id="ukuran" name="ukuran">
                </div>
                <div class="mb-3">
                    <label for="bahan" class="form-label">Bahan</label>
                    <input type="text" class="form-control" id="bahan" name="bahan">
                </div>
                <div class="mb-4">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input class="form-control" type="file" id="gambar" name="gambar" accept=".jpg,.jpeg,.png" >
                    <div id="gambarHelp" class="form-text">Format: JPEG, JPG & PNG</div>
                </div>
                <div class="row mb-4">
                    <label for="tanggal_pembelian" class="col-3 form-label">Tanggal Pembelian</label>
                    <div class="col-5">
                        <input type="date" class="form-control" id="tanggal_pembelian" name="tanggal_pembelian">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="kode_barang" class="form-label">Kode Barang</label>
                    <input type="text" class="form-control" id="kode_barang" name="kode_barang">
                </div>
                <div class="mb-3">
                    <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
                    <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" min=1>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Barang</label>
                    <div class="row">
                        <label for="harga" class="col-sm-1 form-label">Rp.</label>
                        <div class="col col-sm-11">
                            <input type="number" class="form-control" id="harga" name="harga" min=1>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="keadaan_barang" class="form-label">Keadaan Barang</label>
                    <div class="row px-3">
                        <div class="col form-check">
                            <input class="form-check-input" type="radio" name="keadaan_barang" id="type1" value="Baik" checked>
                            <label class="form-check-label" for="type1">
                              Baik (B)
                            </label>
                          </div>
                          <div class="col form-check">
                            <input class="form-check-input" type="radio" name="keadaan_barang" id="type2" value="Kurang Baik">
                            <label class="form-check-label" for="type2">
                              Kurang Baik (KB)
                            </label>
                          </div>
                          <div class="col form-check disabled">
                            <input class="form-check-input" type="radio" name="keadaan_barang" id="type3" value="Rusak Berat">
                            <label class="form-check-label" for="type3">
                              Rusak Berat (RB)
                            </label>
                          </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
