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
                  <td style="width:130px;">Nama Lengkap *</td>
                  <td style="width:10px;">:</td>
                  <td style="width:250px;">
                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" placeholder="Nama Lengkap Konsumen">
                  </td>
                  <td></td>
                  <td style="width:140px;">Kartu Identitas *</td>
                  <td style="width:10px;">:</td>
                  <td style="width:250px;">
                    <select class="form-control" name="kartu_identitas" id="kartu_identitas">
                      <option value="">Pilih</option>
                      <option value="ktp">KTP</option>  
                      <option value="paspor">Paspor</option>
                      <option value="sim">SIM</option>
                    </select>
                  </td>
              </tr>
              <tr>
                  <td>Alamat Lengkap *</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="alamat_diri" id="alamat_diri" class="form-control" placeholder="Alamat Lengkap Konsumen">
                  </td>
                  <td></td>
                  <td>No Identitas *</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="no_identitas" id="no_identitas" class="form-control" placeholder="Nomor Identitas Konsumen">
                  </td>
              </tr>
              <tr>
                  <td>No. Telp *</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="telp_diri" id="telp_diri" class="form-control" placeholder="Nomor Telepon Konsumen">
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
                    <input type="text" name="npwp" id="npwp" class="form-control" placeholder="Nomor NPWP">
                  </td>
                  <td></td>
                  <td>Gaji</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="gaji" id="gaji" class="form-control" placeholder="Gaji Konsumen">

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
                  <td style="width:130px;">Pekerjaan *</td>
                  <td style="width:10px;">:</td>
                  <td style="width:250px;">
                    <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" placeholder="Pekerjaan">
                  </td>
                  <td></td>
                  <td style="width:140px;">Nama Kantor *</td>
                  <td style="width:10px;">:</td>
                  <td style="width:250px;">
                    <input type="text" name="nama_kantor" id="nama_kantor" class="form-control" placeholder="Nama Kantor">
                  </td>
              </tr>
              <tr>
                  <td>Alamat Kantor *</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="alamat_kantor" id="alamat_kantor" class="form-control" placeholder="Alamat Kantor">
                  </td>
                  <td></td>
                  <td>No. Telp Kantor *</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="telp_kantor" id="telp_kantor" class="form-control" placeholder="Nomor Telpon Kantor">
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
                  <td style="width:130px;">Status *</td>
                  <td style="width:10px;">:</td>
                  <td style="width:250px;">
                    <select class="form-control" name="status" id="status">
                      <option value="">Pilih</option>
                      <option value="menikah">Menikah</option>
                      <option value="single">Single</option>
                      <option value="janda">Janda</option>
                      <option value="duda">Duda</option>
                    </select>
                  </td>
                  <td></td>
                  <td style="width:140px;">Nama Pasangan</td>
                  <td style="width:10px;">:</td>
                  <td style="width:250px;">
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
                  <td style="width:130px;">Nama *</td>
                  <td style="width:10px;">:</td>
                  <td style="width:250px;">
                    <input type="text" name="nama_keluarga" id="nama_keluarga" class="form-control" placeholder="Nama Saudara">
                  </td>
                  <td></td>
                  <td style="width:140px;">Hubungan Saudara *</td>
                  <td style="width:10px;">:</td>
                  <td style="width:250px;">
                    <select class="form-control" name="hubungan_keluarga" id="hubungan_keluarga">
                      <option value="">Pilih</option>
                      <option value="kakak">Kakak</option>
                      <option value="adik">Adik</option>
                      <option value="ayah">Ayah</option>
                      <option value="ibu">Ibu</option>
                    </select>
                  </td>
              </tr>
              <tr>
                  <td>No. Telp *</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="telp_keluarga" id="telp_keluarga" class="form-control" placeholder="Nomor Telepon Saudara">
                  </td>
                  <td></td>
                  <td>Alamat *</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="alamat_keluarga" id="alamat_keluarga" class="form-control" placeholder="Alamat Saudara">
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
          <input type="file" name="foto_diri" id="foto_diri" class="form-control-file mt-2" placeholder="Foto Diri Konsumen">
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

