<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

use App\Models\Area;
use App\Models\Golongan;
use App\Models\Aset;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        # USER SEEDER #
        User::create([
            'name' => 'Fauzan Zaman',
            'username' => 'fauzan123',
            'email' => 'fauzan12356@gmail.com',
            'role' => 1,
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Albertus Faisal Yulianto',
            'username' => 'faisal123',
            'email' => 'faisal123@gmail.com',
            'role' => 0,
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Ahmad Dafa B. R',
            'username' => 'dafa123',
            'email' => 'dafa123@gmail.com',
            'role' => 0,
            'password' => bcrypt('password')
        ]);
        # USER SEEDER #

        # AREA SEEDER #
        Area::create([
            'kabupaten' => 'Brebes',
            'provinsi' => 'Jawa Tengah',
            'unit' => 'Pemerintah Kabupaten Brebes',
            'satuan_kerja' => 'Pemerintah Desa Dumeling',
            'nama_area' => 'R. Administrasi',
            'kode_lokasi' => '33.29.08.2003'
        ]);
        
        Area::create([
            'kabupaten' => 'Brebes',
            'provinsi' => 'Jawa Tengah',
            'unit' => 'Pemerintah Kabupaten Brebes',
            'satuan_kerja' => 'Pemerintah Desa Dumeling',
            'nama_area' => 'R. Aula',
            'kode_lokasi' => '33.29.08.2003'
        ]);

        Area::create([
            'kabupaten' => 'Brebes',
            'provinsi' => 'Jawa Tengah',
            'unit' => 'Pemerintah Kabupaten Brebes',
            'satuan_kerja' => 'Pemerintah Desa Dumeling',
            'nama_area' => 'R. Pelayanan',
            'kode_lokasi' => '33.29.08.2003'
        ]);

        Area::create([
            'kabupaten' => 'Brebes',
            'provinsi' => 'Jawa Tengah',
            'unit' => 'Pemerintah Kabupaten Brebes',
            'satuan_kerja' => 'Pemerintah Desa Dumeling',
            'nama_area' => 'R. Tamu',
            'kode_lokasi' => '33.29.08.2003'
        ]);
        # AREA SEEDER

        # GOLONGAN SEEDER
        Golongan::create([
            'nama_golongan' => 'Persediaan'
        ]);

        Golongan::create([
            'nama_golongan' => 'Tanah'
        ]);

        Golongan::create([
            'nama_golongan' => 'Peralatan dan Mesin'
        ]);

        Golongan::create([
            'nama_golongan' => 'Gedung dan Bangunan'
        ]);

        Golongan::create([
            'nama_golongan' => 'Jalan, Irigasi, dan Jaringan'
        ]);

        Golongan::create([
            'nama_golongan' => 'Aset Tetap Lainnya'
        ]);

        Golongan::create([
            'nama_golongan' => 'Konstruksi dalam Pengerjaan'
        ]);

        Golongan::create([
            'nama_golongan' => 'Aset tak Berwujud'
        ]);
        # GOLONGAN SEEDER

        # ASET SEEDER
        Aset::create([
            'id_area' => 1,
            'id_golongan' => 1,
            'nama_barang' => 'Shogun',
            'model' => 'Suzuki',
            'seri_pabrik' => '1234',
            'ukuran' => '15cm',
            'bahan' => 'Logam',
            'tanggal_pembelian' => Carbon::parse('2022-12-15'),
            'kode_barang' => '1',
            'jumlah_barang' => 2,
            'harga' => 1000,
            'keadaan_barang' => 'baik',
            'keterangan' => '-'
        ]);

    }
}
