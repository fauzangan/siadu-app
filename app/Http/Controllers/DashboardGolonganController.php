<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aset;

class DashboardGolonganController extends Controller
{
    public function showGolongan1(){
        return view('dashboard.golongan.golongan1', [
            'asets' => Aset::where('id_golongan', 1)->get()
        ]);
    }

    public function showGolongan2(){
        return view('dashboard.golongan.golongan2', [
            'asets' => Aset::where('id_golongan', 2)->get()
        ]);
    }

    public function showGolongan3(){
        return view('dashboard.golongan.golongan3', [
            'asets' => Aset::where('id_golongan', 3)->get()
        ]);
    }

    public function showGolongan4(){
        return view('dashboard.golongan.golongan4', [
            'asets' => Aset::where('id_golongan', 4)->get()
        ]);
    }

    public function showGolongan5(){
        return view('dashboard.golongan.golongan5', [
            'asets' => Aset::where('id_golongan', 5)->get()
        ]);
    }

    public function showGolongan6(){
        return view('dashboard.golongan.golongan6', [
            'asets' => Aset::where('id_golongan', 6)->get()
        ]);
    }

    public function showGolongan7(){
        return view('dashboard.golongan.golongan7', [
            'asets' => Aset::where('id_golongan', 7)->get()
        ]);
    }

    public function showGolongan8(){
        return view('dashboard.golongan.golongan8', [
            'asets' => Aset::where('id_golongan', 8)->get()
        ]);
    }
    
}
