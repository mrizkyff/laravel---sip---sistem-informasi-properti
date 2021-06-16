@extends('templates/main')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <form action="/assets" method="POST" enctype="multipart/form-data">
            @csrf
          <h3 class="card-title">Data Aset</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <center>
          <table style="width: 80%" border=0>
              <tr>
                  <td style="width:160px;">Nama Aset *</td>
                  <td style="width:10px;">:</td>
                  <td style="width:300px;">
                    <input disabled value="{{$asset->nama_asset}}" type="text" name="nama_asset" id="nama_asset" class="form-control @error('nama_asset') is-invalid @enderror" placeholder="Nama Asset">
                  </td>
                  <td></td>
                  <td style="width:170px;">Lokasi Asset *</td>
                  <td style="width:10px;">:</td>
                  <td style="width:300px;">
                    <input disabled value="{{$asset->lokasi}}" type="text" name="lokasi" id="lokasi" class="form-control @error('lokasi') is-invalid @enderror" placeholder="Lokasi Aset">
                  </td>
              </tr>
              <tr>
                  <td>Jumlah Blok *</td>
                  <td>:</td>
                  <td>
                    <input disabled value="{{$asset->jml_blok}}" type="text" name="jml_blok" id="jml_blok" class="form-control @error('jml_blok') is-invalid @enderror" placeholder="Jumlah Blok">
                  </td>
                  <td></td>
                  <td>Sisa Blok *</td>
                  <td>:</td>
                  <td>
                    <input disabled value="{{$asset->sisa_blok}}" type="text" name="sisa_blok" id="sisa_blok" class="form-control @error('sisa_blok') is-invalid @enderror" placeholder="Sisa Blok">
                  </td>
              </tr>
              <tr>
                  <td>Keterangan</td>
                  <td>:</td>
                  <td>
                    <input disabled value="{{$asset->keterangan}}" type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Keterangan">
                  </td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                <td>Foto Asset</td>
                <td>:</td>
                <td colspan="5">
                    <img src="/images/assets/{{$asset->foto}}" style="height:400px;" class="mt-2">
                </td>
              </tr>
          </table>
          </center>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->

      <div class="col">
          <center>
              <a href="/assets" class="btn btn-info btn-md mb-2"><i class="fas fa-backward"></i> Kembali</a>
              </form>
          </center>
      </div>
  </div>
@endsection

