<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Aset;
use App\Models\Golongan;
use Illuminate\Http\Request;

class DashboardAsetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Area $area)
    {
        return view('dashboard.aset.index', [
            'asets' => Aset::where('bit_active', 1)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.aset.create', [
            'areas' => Area::where('bit_active', 1)->get(),
            'golongans' => Golongan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_area' => ['required'],
            'id_golongan' => ['required'],
            'nama_barang' => ['required'],
            'model' => ['required'],
            'seri_pabrik' => ['max:255'],
            'ukuran' => ['required'],
            'bahan' => ['required'],
            'gambar' => ['file', 'image'],
            'tanggal_pembelian' => ['required'],
            'kode_barang' => ['required'],
            'jumlah_barang' => ['required'],
            'harga' => ['required'],
            'keadaan_barang' => ['required'],
            'keterangan' => []
        ]);

        if($request['keteranga']==null){
            $validatedData['keterangan'] = '-';
        }

        if($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('aset-images');
        }
        Aset::create($validatedData);
        return redirect('/dashboard/asets')->with('success','Area baru telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aset  $aset
     * @return \Illuminate\Http\Response
     */
    public function show(Aset $aset)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aset  $aset
     * @return \Illuminate\Http\Response
     */
    public function edit(Aset $aset)
    {
        return view('dashboard.aset.edit', [
            'aset' => $aset,
            'areas' => Area::all(),
            'golongans' => Golongan::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aset  $aset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aset $aset)
    {
        $validatedData = $request->validate([
            'id_area' => ['required'],
            'id_golongan' => ['required'],
            'nama_barang' => ['required'],
            'model' => ['required'],
            'seri_pabrik' => ['max:255'],
            'ukuran' => ['required'],
            'bahan' => ['required'],
            'gambar' => ['file', 'image'],
            'tanggal_pembelian' => ['required'],
            'kode_barang' => ['required'],
            'jumlah_barang' => ['required'],
            'harga' => ['required'],
            'keadaan_barang' => ['required'],
            'keterangan' => []
        ]);

        Aset::where('id_aset', $aset->id_aset)->update($validatedData);
        return redirect('/dashboard/asets')->with('success','Area telah diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aset  $aset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aset $aset)
    {
        //
    }

    public function showHidden(){
        return view('dashboard.aset.hidden', [
            'asets' => Aset::where('bit_active', 0)->get()
        ]);
    }

    public function hidden(Request $request, $id){
        $rules = [
            'bit_active' => ['required'] 
        ];

        $validatedData = $request->validate($rules);
        Aset::where('id_aset', $id)->update($validatedData);
        // $asets = Aset::where('id_area', $id)->get();
        // foreach($asets as $aset){
        //     $aset->bit_active = 0;
        //     $aset->save();
        // }
        return redirect()->back();
    }
}
