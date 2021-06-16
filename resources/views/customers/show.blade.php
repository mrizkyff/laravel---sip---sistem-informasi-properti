@extends('templates/main')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">{{$meta['subtitle']}}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <center>
          <table style="width: 80%" border=0>
              <tr>
                  <td style="width:160px;">Nama Lengkap *</td>
                  <td style="width:10px;">:</td>
                  <td style="width:300px;">{{$customer->nama_lengkap}}</td>
                  <td></td>
                  <td style="width:170px;">Kartu Identitas *</td>
                  <td style="width:10px;">:</td>
                  <td style="width:300px;">{{$customer->kartu_identitas}}</td>
              </tr>
              <tr>
                  <td>Alamat Lengkap *</td>
                  <td>:</td>
                  <td>{{$customer->alamat_diri}}</td>
                  <td></td>
                  <td>No Identitas *</td>
                  <td>:</td>
                  <td>{{$customer->no_identitas}}</td>
              </tr>
              <tr>
                  <td>No. Telp *</td>
                  <td>:</td>
                  <td>{{$customer->telp_diri}}</td>
                  <td></td>
                  <td>E-mail</td>
                  <td>:</td>
                  <td>{{$customer->email}}</td>
              </tr>
              <tr>
                  <td>No. NPWP *</td>
                  <td>:</td>
                  <td>{{$customer->npwp}}</td>
                  <td></td>
                  <td>Gaji *</td>
                  <td>:</td>
                  <td>{{$customer->gaji}}</td>
              </tr>
              <tr>
                  <td>Keterangan</td>
                  <td>:</td>
                  <td>{{$customer->keterangan_diri}}</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>
          </table>
          </center>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->


    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Pekerjaan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <center>
          <table style="width: 80%" border=0>
              <tr>
                  <td style="width:160px;">Pekerjaan *</td>
                  <td style="width:10px;">:</td>
                  <td style="width:300px;">{{$customer->pekerjaan}}</td>
                  <td></td>
                  <td style="width:170px;">Nama Kantor *</td>
                  <td style="width:10px;">:</td>
                  <td style="width:300px;">{{$customer->nama_kantor}}</td>
              </tr>
              <tr>
                  <td>Alamat Kantor *</td>
                  <td>:</td>
                  <td>{{$customer->alamat_kantor}}</td>
                  <td></td>
                  <td>No. Telp Kantor *</td>
                  <td>:</td>
                  <td>{{$customer->telp_kantor}}</td>
              </tr>
              <tr>
                  <td>Keterangan</td>
                  <td>:</td>
                  <td>{{$customer->keterangan_pekerjaan}}</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>
          </table>
          </center>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->


    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Pasangan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <center>
          <table style="width: 80%" border=0>
              <tr>
                  <td style="width:160px;">Status *</td>
                  <td style="width:10px;">:</td>
                  <td style="width:300px;">{{$customer->status}}</td>
                  <td></td>
                  <td style="width:170px;">Nama Pasangan</td>
                  <td style="width:10px;">:</td>
                  <td style="width:300px;">{{$customer->nama_pasangan}}</td>
              </tr>
              <tr>
                  <td>No. Telp</td>
                  <td>:</td>
                  <td>{{$customer->telp_pasangan}}</td>
                  <td></td>
                  <td>Pekerjaan Pasangan</td>
                  <td>:</td>
                  <td>{{$customer->pekerjaan_pasangan}}</td>
              </tr>
              <tr>
                  <td>Alamat Kantor</td>
                  <td>:</td>
                  <td>{{$customer->alamat_kantor_pasangan}}</td>
                  <td></td>
                  <td>Keterangan</td>
                  <td>:</td>
                  <td>{{$customer->keterangan_pasangan}}</td>
              </tr>
          </table>
          </center>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->


    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Keluarga</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <center>
          <table style="width: 80%" border=0>
              <tr>
                  <td style="width:160px;">Nama</td>
                  <td style="width:10px;">:</td>
                  <td style="width:300px;">{{$customer->nama_keluarga}}</td>
                  <td></td>
                  <td style="width:170px;">Hubungan Keluarga</td>
                  <td style="width:10px;">:</td>
                  <td style="width:300px;">{{$customer->hubungan_keluarga}}</td>
              </tr>
              <tr>
                  <td>No. Telp</td>
                  <td>:</td>
                  <td>{{$customer->telp_keluarga}}</td>
                  <td></td>
                  <td>Alamat</td>
                  <td>:</td>
                  <td>{{$customer->alamat_keluarga}}</td>
              </tr>
              <tr>
                  <td>Keterangan</td>
                  <td>:</td>
                  <td>{{$customer->keterangan_keluarga}}</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>
          </table>
          </center>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>


    <!-- /.col -->
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Foto Diri</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <img src="/images/customers/{{$customer->foto_diri}}" style="height:150px;">
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->

      <div class="col">
          <center>
              <a href="/customers" class="btn btn-info btn-md mb-2"><i class="fas fa-backward"></i> Kembali</a>
          </center>
      </div>
  </div>
@endsection

