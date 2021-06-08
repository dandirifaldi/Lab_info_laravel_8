@extends('layout.v_template')
@section('title','License')

@section('content')
	<div class="container-fluid">
    <a href="/license/add" class="btn btn-sm btn-primary">Tambah License</a><br><br>
    @if (session('pesanTambah'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses!!</strong> Data Berhasil Ditambahkan.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @elseif(session('pesanUpdate'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses!!</strong> Data Berhasil Diupdate.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data License</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Software</th>
                    <th>Product Key</th>
                    <th>Expired Date</th>
                    <th>Manufacturer</th>
                    <th>License to Name</th>
                    <th>License to Email</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  	<?php $no=1 ?>
                  	@foreach($license as $data)
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data->soft_name}}</td>
                    <td>{{$data->license_key}}</td>
                    <td>{{$data->exp_date}}</td>
                    <td>{{$data->manufacturer}}</td>
                    <td>{{$data->lcs_name}}</td>
                    <td>{{$data->lcs_email}}</td>
                    <td>
                    	<a href="/license/detail/{{$data->id_license}}" class="btn btn-sm btn-success">Detail</a>
                    	<a href="/license/edit/{{$data->id_license}}" class="btn btn-sm btn-warning">Update</a>
                    	<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{$data->id_license}}">
                  Delete
                </button>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>

@foreach($license as $data)

<div class="modal fade" id="delete{{$data->id_license}}">
        <div class="modal-dialog modal-md">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h5 class="modal-title">{{$data->manufacturer}} {{$data->soft_name}}</h5><br><br>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p><b>Dengan License atas nama {{$data->lcs_name}} </b><br>Apakah Anda ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tidak Ingin</button>
              <a href="license/delete/{{$data->id_license}}" type="button" class="btn btn-outline-light">Tentu Saja Iya</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
@endforeach


@endsection