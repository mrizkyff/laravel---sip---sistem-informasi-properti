<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        $meta = [
            'title' => 'SIP - Konsumen',
            'navigation' => 'Konsumen',
            'subtitle' => 'Daftar Konsumen yang Terdaftar',
        ];
        return view('customers/index',['meta' => $meta, 'customers' => $customers]);
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
        return view('customers.create', ['meta' => $meta]);
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
            // 'nama_lengkap' => 'required',
            // 'kartu_identitas' => 'required',
            // 'alamat_diri' => 'required',
            // 'no_identitas' => 'required|unique:customers',
            // 'telp_diri' => 'required',
            // 'email' => 'required',
            // 'npwp' => 'required',
            // 'gaji' => 'required',
            // 'pekerjaan' => 'required',
            // 'nama_kantor' => 'required',
            // 'alamat_kantor' => 'required',
            // 'telp_kantor' => 'required',
            // 'status' => 'required',
            // 'nama_keluarga' => 'required',
            // 'hubungan_keluarga' => 'required',
            // 'telp_keluarga' => 'required',
            // 'alamat_keluarga' => 'required',
            'foto_diri' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        ]);

        $imageName = $request->nama_lengkap.time().'.'.$request->foto_diri->extension();
        $request->foto_diri->move(public_path('images/customers'), $imageName);
        
        $x = [];
        foreach ($request->all() as $key => $value) {
            if($key != "foto_diri"){
                $x[$key] = $value;
            }
        }
        $x['foto_diri'] = $imageName;
        Customer::create($x);
        return redirect('/customers')->with('status','Data Konsumen berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {   
        $meta = [
            'title' => 'SIP - Detail Konsumen',
            'navigation' => 'Detail Konsumen',
            'subtitle' => 'Detail Konsumen',
        ];
        return view('customers.show', ['meta' => $meta, 'customer' => $customer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        $meta = [
            'title' => 'SIP - Update Konsumen',
            'navigation' => 'Update Konsumen',
            'subtitle' => 'Update Konsumen',
        ];
        // dd($customer);
        return view('customers.edit',['meta' => $meta, 'customer' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        // validatenya belum
        $x = [];
        if($request->foto_diri === null){
            // dd($request->foto_diri);
            foreach ($request->all() as $key => $value) {
                if($key != "foto_diri"){
                    $x[$key] = $value;
                }
            }
            $x['foto_diri'] = $customer->foto_diri;
        }
        else if($request->foto_diri !== null){
            // dd($request->foto_diri);
            $imageName = $request->nama_lengkap.time().'.'.$request->foto_diri->extension();

            foreach ($request->all() as $key => $value) {
                if($key != "foto_diri"){
                    $x[$key] = $value;
                }
            }
            $x['foto_diri'] = $imageName;
            $request->foto_diri->move(public_path('images/customers'), $imageName);
        }
        Customer::where('id', $customer->id)
            ->update([
                'nama_lengkap' => $x['nama_lengkap'],
                'kartu_identitas' => $x['kartu_identitas'],
                'alamat_diri' => $x['alamat_diri'],
                'no_identitas' => $x['no_identitas'],
                'telp_diri' => $x['telp_diri'],
                'email' => $x['email'],
                'npwp' => $x['npwp'],
                'gaji' => $x['gaji'],
                'keterangan_diri' => $x['keterangan_diri'],
                'pekerjaan' => $x['pekerjaan'],
                'nama_kantor' => $x['nama_kantor'],
                'alamat_kantor' => $x['alamat_kantor'],
                'telp_kantor' => $x['telp_kantor'],
                'keterangan_pekerjaan' => $x['keterangan_pekerjaan'],
                'status' => $x['status'],
                'nama_pasangan' => $x['nama_pasangan'],
                'telp_pasangan' => $x['telp_pasangan'],
                'pekerjaan_pasangan' => $x['pekerjaan_pasangan'],
                'alamat_kantor_pasangan' => $x['alamat_kantor_pasangan'],
                'keterangan_pasangan' => $x['keterangan_pasangan'],
                'nama_keluarga' => $x['nama_keluarga'],
                'hubungan_keluarga' => $x['hubungan_keluarga'],
                'telp_keluarga' => $x['telp_keluarga'],
                'alamat_keluarga' => $x['alamat_keluarga'],
                'keterangan_keluarga' => $x['keterangan_keluarga'],
                'foto_diri' => $x['foto_diri'],
            ]);
        return redirect('/customers')->with('status','Data Konsumen berhasil diupdate!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
