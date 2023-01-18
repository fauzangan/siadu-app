<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Aset;
use Illuminate\Http\Request;

class DashboardAreaController extends Controller
{
    public function index()
    {
        return view('dashboard.area.index', [
            'areas' => Area::where('bit_active', 1)->get()
        ]);
    }

    public function create()
    {
        return view('dashboard.area.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kabupaten' => ['required'],
            'provinsi' => ['required'],
            'unit' => ['required'],
            'satuan_kerja' => ['required'],
            'nama_area' => ['required'],
            'kode_lokasi' => ['required']
        ]);
        Area::create($validatedData);
        return redirect('/dashboard/areas')->with('success','Area baru telah ditambahkan!');
    }

    public function show(Area $area)
    {
        return view('dashboard.area.show', [
            'area' => $area,
            'asets' => Aset::where('id_area', $area->id_area)->where('bit_active', 1)->get()
        ]);
    }

    public function edit(Area $area)
    {
        return view('dashboard.area.edit', [
            'area' => $area
        ]);
    }

    public function update(Request $request, Area $area)
    {
        $validatedData = $request->validate([
            'kabupaten' => ['required'],
            'provinsi' => ['required'],
            'unit' => ['required'],
            'satuan_kerja' => ['required'],
            'nama_area' => ['required'],
            'kode_lokasi' => ['required']
        ]);

        Area::where('id_area', $area->id_area)->update($validatedData);
        return redirect('/dashboard/areas')->with('success','Area telah diupdate!');
    }

    public function destroy(Area $area)
    {
        //
    }

    public function showHidden(){
        return view('dashboard.area.hidden', [
            'areas' => Area::where('bit_active', 0)->get()
        ]);
    }

    public function hidden(Request $request, $id){
        $rules = [
            'bit_active' => ['required'] 
        ];

        $validatedData = $request->validate($rules);
        Area::where('id_area', $id)->update($validatedData);
        // $asets = Aset::where('id_area', $id)->get();
        // foreach($asets as $aset){
        //     $aset->bit_active = 0;
        //     $aset->save();
        // }
        return redirect('/dashboard/areas');
    }

    public function restore(Request $request, $id){
        $rules = [
            'bit_active' => ['required'] 
        ];

        $validatedData = $request->validate($rules);
        Area::where('id_area', $id)->update($validatedData);

        return redirect('/dashboard/areas/hidden');
    }
}
