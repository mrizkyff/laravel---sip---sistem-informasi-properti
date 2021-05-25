@extends('templates/main')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">{{$meta['subtitle']}}</h3>
          <a href="/customers/create" class="btn btn-success btn-sm" style="float: right;"><i class="fa fa-plus"></i> Konsumen Baru</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="table_list_konsumen" class="table table-bordered table-striped table-sm">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat</th>
                    <th>Identitas</th>
                    <th>Nomor Identitas</th>
                    <th>Telp/Hp</th>
                    <th>E-mail</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$customer->nama_lengkap}}</td>
                        <td>{{$customer->alamat_diri}}</td>
                        <td>{{$customer->kartu_identitas}}</td>
                        <td>{{$customer->no_identitas}}</td>
                        <td>{{$customer->telp_diri}}</td>
                        <td>{{$customer->email}}</td>
                        <td>{{$customer->created_at}}</td>
                        <td>Aksi</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat</th>
                    <th>Identitas</th>
                    <th>Nomor Identitas</th>
                    <th>Telp/Hp</th>
                    <th>E-mail</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
<!-- /.row -->
@endsection

@section('scriptku')
<script>
    $(function () {
      $("#table_list_konsumen").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#table_list_konsumen_wrapper .col-md-6:eq(0)');
    });
</script>
@endsection