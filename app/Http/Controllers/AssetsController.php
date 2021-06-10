<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;

class AssetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assets = Asset::all();
        $meta = [
            'title' => 'SIP - Aset',
            'navigation' => 'Aset',
            'subtitle' => 'Daftar Aset yang Terdaftar',
        ];
        return view('assets/index',compact('meta','assets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $meta = [
            'title' => 'SIP - Tambah Konsumen',
            'navigation' => 'Tambah Konsumen',
        ];
        return view('assets.create', ['meta' => $meta]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_asset' => 'required',
            'lokasi' => 'required',
            'jml_blok' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageName = $request->nama_lengkap.time().'.'.$request->foto->extension();
        $request->foto->move(public_path('images/assets'), $imageName);

        $x = [];
        foreach ($request->all() as $key => $value) {
            if($key != "foto"){
                $x[$key] = $value;
            }
        }
        $x['foto'] = $imageName;

        Asset::create($x);
        return redirect('/assets')->with('status','Aset berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function show(Asset $asset)
    {
        $meta = [
            'title' => 'SIP - Detail Aset',
            'navigation' => 'Detail Aset',
            'subtitle' => 'Detail Aset',
        ];
        return view('assets.show', compact('meta','asset'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function edit(Asset $asset)
    {
        $meta = [
            'title' => 'SIP - Update Aset',
            'navigation' => 'Update Aset',
            'subtitle' => 'Update Aset',
        ];
        return view('assets.edit', compact('meta','asset'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asset $asset)
    {
        $request->validate([
            'nama_asset' => 'required',
            'lokasi' => 'required',
            'jml_blok' => 'required',
            'foto' => '|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $x = [];
        foreach ($request->all() as $key => $value) {
            if($key != "foto"){
                $x[$key] = $value;
            }
        }

        if($request->foto === null){
            $x['foto'] = $asset->foto;
        }
        else if($request->foto !== null){
            $imageName = $request->nama_asset.time().'.'.$request->foto->extension();
            $request->foto->move(public_path('images/assets'), $imageName);
            $x['foto'] = $imageName;
        }

        Asset::where('id',$asset->id)
            ->update([
                'nama_asset' => $x['nama_asset'],
                'lokasi' => $x['lokasi'],
                'jml_blok' => $x['jml_blok'],
                'foto' => $x['foto'],
                'keterangan' => $x['keterangan'],
            ]);
        return redirect('/assets')->with('status','Aset berhasil diupdate!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asset $asset)
    {
        Asset::destroy($asset->id);

        return redirect('/assets')->with('status','Asset berhasil dihapus!!');
    }
}
