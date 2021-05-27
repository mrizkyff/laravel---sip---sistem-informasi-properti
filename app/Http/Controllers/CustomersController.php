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
        //
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
