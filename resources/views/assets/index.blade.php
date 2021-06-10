@extends('templates/main')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">{{$meta['subtitle']}}</h3>
          <a href="/assets/create" class="btn btn-success btn-sm" style="float: right;"><i class="fa fa-plus"></i> Aset Baru</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="table_list_asset" class="table table-bordered table-striped table-sm table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Asset</th>
                    <th>Lokasi</th>
                    <th>Jumlah Blok</th>
                    <th>Sisa Blok</th>
                    <th>Keterangan</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr> 
            </thead>
            <tbody>
                @foreach ($assets as $asset)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$asset->nama_asset}}</td>
                        <td>{{$asset->lokasi}}</td>
                        <td>{{$asset->jml_blok}}</td>
                        <td>{{$asset->sisa_blok}}</td>
                        <td>{{$asset->keterangan}}</td>
                        <td>{{$asset->updated_at}}</td>
                        <td>
                            <a href="/assets/{{$asset->id}}" style="padding: 4px;" class="badge bg-info"><i class="fas fa-info-circle"></i> Detail</a>
                            <a href="/assets/{{$asset->id}}/edit" style="padding: 4px;" class="badge bg-primary"><i class="fas fa-edit    "></i> Edit</a>
                            <form method="POST" action="/assets/{{$asset->id}}" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" style="border: 0; padding: 4px;" class="badge bg-danger"><i class="fas fa-trash    "></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama Asset</th>
                    <th>Lokasi</th>
                    <th>Jumlah Blok</th>
                    <th>Sisa Blok</th>
                    <th>Keterangan</th>
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
      $("#table_list_asset").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#table_list_asset_wrapper .col-md-6:eq(0)');
    });
</script>
@endsection