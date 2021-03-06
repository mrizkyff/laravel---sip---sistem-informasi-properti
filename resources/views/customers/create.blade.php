@extends('templates/main')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <form action="/customers" method="POST" enctype="multipart/form-data">
            @csrf
          <h3 class="card-title">Data Diri</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <center>
          <table style="width: 80%" border=0>
              <tr>
                  <td style="width:160px;">Nama Lengkap *</td>
                  <td style="width:10px;">:</td>
                  <td style="width:300px;">
                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control @error('nama_lengkap') is-invalid @enderror" placeholder="Nama Lengkap Konsumen">
                    @error('nama_lengkap')<div class="invalid-feedback">{{$message}}</div>@enderror
                  </td>
                  <td></td>
                  <td style="width:170px;">Kartu Identitas *</td>
                  <td style="width:10px;">:</td>
                  <td style="width:300px;">
                    <select class="form-control @error('kartu_identitas') is-invalid @enderror" name="kartu_identitas" id="kartu_identitas">
                      <option value="">Pilih</option>
                      <option value="ktp">KTP</option>  
                      <option value="paspor">Paspor</option>
                      <option value="sim">SIM</option>
                    </select>
                    @error('kartu_identitas')<div class="invalid-feedback">{{$message}}</div>@enderror
                  </td>
              </tr>
              <tr>
                  <td>Alamat Lengkap *</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="alamat_diri" id="alamat_diri" class="form-control @error('alamat_diri') is-invalid @enderror" placeholder="Alamat Lengkap Konsumen">
                    @error('alamat_diri')<div class="invalid-feedback">{{$message}}</div>@enderror
                  </td>
                  <td></td>
                  <td>No Identitas *</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="no_identitas" id="no_identitas" class="form-control @error('no_identitas') is-invalid @enderror" placeholder="Nomor Identitas Konsumen">
                    @error('no_identitas')<div class="invalid-feedback">{{$message}}</div>@enderror
                  </td>
              </tr>
              <tr>
                  <td>No. Telp *</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="telp_diri" id="telp_diri" class="form-control @error('telp_diri') is-invalid @enderror" placeholder="Nomor Telepon Konsumen">
                    @error('telp_diri')<div class="invalid-feedback">{{$message}}</div>@enderror
                  </td>
                  <td></td>
                  <td>E-mail</td>
                  <td>:</td>
                  <td>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email Lengkap Konsumen">
                  </td>
              </tr>
              <tr>
                  <td>No. NPWP *</td>
                  <td>:</td> 
                  <td>
                    <input type="text" name="npwp" id="npwp" class="form-control @error('npwp') is-invalid @enderror" placeholder="Nomor NPWP">
                    @error('npwp')<div class="invalid-feedback">{{$message}}</div>@enderror
                  </td>
                  <td></td>
                  <td>Gaji *</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="gaji" id="gaji" class="form-control @error('gaji') is-invalid @enderror" placeholder="Gaji Konsumen">
                    @error('gaji')<div class="invalid-feedback">{{$message}}</div>@enderror
                  </td>
              </tr>
              <tr>
                  <td>Keterangan</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="keterangan_diri" id="keterangan_diri" class="form-control" placeholder="Keterangan Diri">
                  </td>
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
                  <td style="width:300px;">
                    <input type="text" name="pekerjaan" id="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror" placeholder="Pekerjaan">
                    @error('pekerjaan')<div class="invalid-feedback">{{$message}}</div>@enderror
                  </td>
                  <td></td>
                  <td style="width:170px;">Nama Kantor *</td>
                  <td style="width:10px;">:</td>
                  <td style="width:300px;">
                    <input type="text" name="nama_kantor" id="nama_kantor" class="form-control @error('nama_kantor') is-invalid @enderror" placeholder="Nama Kantor">
                    @error('nama_kantor')<div class="invalid-feedback">{{$message}}</div>@enderror
                  </td>
              </tr>
              <tr>
                  <td>Alamat Kantor *</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="alamat_kantor" id="alamat_kantor" class="form-control @error('alamat_kantor') is-invalid @enderror" placeholder="Alamat Kantor">
                    @error('alamat_kantor')<div class="invalid-feedback">{{$message}}</div>@enderror
                  </td>
                  <td></td>
                  <td>No. Telp Kantor *</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="telp_kantor" id="telp_kantor" class="form-control @error('telp_kantor') is-invalid @enderror" placeholder="Nomor Telpon Kantor">
                    @error('telp_kantor')<div class="invalid-feedback">{{$message}}</div>@enderror
                  </td>
              </tr>
              <tr>
                  <td>Keterangan</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="keterangan_pekerjaan" id="keterangan_pekerjaan" class="form-control" placeholder="Keterangan">
                  </td>
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
                  <td style="width:300px;">
                    <select class="form-control @error('status') is-invalid @enderror" name="status" id="status">
                      <option value="">Pilih</option>
                      <option value="menikah">Menikah</option>
                      <option value="single">Single</option>
                      <option value="janda">Janda</option>
                      <option value="duda">Duda</option>
                    </select>
                    @error('status')<div class="invalid-feedback">{{$message}}</div>@enderror
                  </td>
                  <td></td>
                  <td style="width:170px;">Nama Pasangan</td>
                  <td style="width:10px;">:</td>
                  <td style="width:300px;">
                    <input type="text" name="nama_pasangan" id="nama_pasangan" class="form-control" placeholder="Nama Pasangan">
                  </td>
              </tr>
              <tr>
                  <td>No. Telp</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="telp_pasangan" id="telp_pasangan" class="form-control" placeholder="Nomor Telepon Pasangan">
                  </td>
                  <td></td>
                  <td>Pekerjaan Pasangan</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="pekerjaan_pasangan" id="pekerjaan_pasangan" class="form-control" placeholder="Pekerjaan Pasangan">
                  </td>
              </tr>
              <tr>
                  <td>Alamat Kantor Pasangan</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="alamat_kantor_pasangan" id="alamat_kantor_pasangan" class="form-control" placeholder="Alamat Kantor Pasangan">
                  </td>
                  <td></td>
                  <td>Keterangan</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="keterangan_pasangan" id="keterangan_pasangan" class="form-control" placeholder="Keterangan Pasangan">
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
                  <td style="width:160px;">Nama *</td>
                  <td style="width:10px;">:</td>
                  <td style="width:300px;">
                    <input type="text" name="nama_keluarga" id="nama_keluarga" class="form-control @error('nama_keluarga') is-invalid @enderror" placeholder="Nama Saudara">
                    @error('nama_keluarga')<div class="invalid-feedback">{{$message}}</div>@enderror
                  </td>
                  <td></td>
                  <td style="width:170px;">Hubungan Saudara *</td>
                  <td style="width:10px;">:</td>
                  <td style="width:300px;">
                    <select class="form-control @error('hubungan_keluarga') is-invalid @enderror" name="hubungan_keluarga" id="hubungan_keluarga">
                      <option value="">Pilih</option>
                      <option value="kakak">Kakak</option>
                      <option value="adik">Adik</option>
                      <option value="ayah">Ayah</option>
                      <option value="ibu">Ibu</option>
                    </select>
                    @error('hubungan_keluarga')<div class="invalid-feedback">{{$message}}</div>@enderror
                  </td>
              </tr>
              <tr>
                  <td>No. Telp *</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="telp_keluarga" id="telp_keluarga" class="form-control @error('telp_keluarga') is-invalid @enderror" placeholder="Nomor Telepon Saudara">
                    @error('telp_keluarga')<div class="invalid-feedback">{{$message}}</div>@enderror
                  </td>
                  <td></td>
                  <td>Alamat *</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="alamat_keluarga" id="alamat_keluarga" class="form-control @error('alamat_keluarga') is-invalid @enderror" placeholder="Alamat Saudara">
                    @error('alamat_keluarga')<div class="invalid-feedback">{{$message}}</div>@enderror
                  </td>
              </tr>
              <tr>
                  <td>Keterangan</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="keterangan_keluarga" id="keterangan_keluarga" class="form-control" placeholder="Keterangan Keluarga">
                  </td>
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
          <img src="/images/customers/default.png" style="width:150px; height:150px;">
          <div class="custom-file mt-2">
            <input type="file" class="custom-file-input @error('foto_diri') is-invalid @enderror" id="validatedCustomFile" name="foto_diri" id="foto_diri">
            <label class="custom-file-label" for="validatedCustomFile">Foto Diri Konsumen (max 1mb)</label>
            @error('foto_diri')<div class="invalid-feedback">{{$message}}</div>@enderror    
          </div>      
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->

      <div class="col">
          <center>
              <a href="/customers" class="btn btn-info btn-md mb-2"><i class="fas fa-backward"></i> Kembali</a>

              <button type="submit" class="btn btn-info btn-md mb-2">Simpan <i class="fas fa-paper-plane"></i></button>
              </form>
          </center>
      </div>
  </div>
@endsection

