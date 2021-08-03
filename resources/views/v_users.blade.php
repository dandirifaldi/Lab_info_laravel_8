@extends('layout.v_template')
@section('title','Users')

@section('content')
	<div class="container-fluid">
    <a href="/users/add" class="btn btn-sm btn-primary">Tambah Users</a><br><br>
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
                <div class="col-md-2">
                <h3 class="card-title">Data Users</h3>
                </div>
                <div class="input-group col-md-4 float-right">
                  <input type="text" class="form-control form-control-sm" value="Cari...">
                  <span class="input-group-btn">
                  <button class="btn btn-primary btn-sm my-2 my-sm-0" type="button"><i class="fa fa-search"></i></button>
                  </span>
                </div>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover table-sm table-responsive-sm text-center">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Created Date</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  	<?php $no=1 ?>
                  	@foreach($users as $data)
                  <tr>
                    <td class="align-middle">{{$no++}}</td>
                    <td class="align-middle">{{$data->id}}</td>
                    <td class="align-middle">{{$data->name}}</td>
                    <td class="align-middle">{{$data->email}}</td>
                    <td class="align-middle">{{$data->created_at}}</td>
                    <td class="align-middle">{{$data->updated_at}}</td>
                    <td class="align-middle">
                    	<!-- <a href="/users/detail/{{$data->id}}" class="btn btn-sm btn-success">Detail</a> -->
                    	<a href="/users/edit/{{$data->id}}" class="btn btn-sm btn-warning">Update</a>
                    	<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{$data->id}}">
                  Delete
                </button>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
                Halaman {{ $users->currentPage() }} dari {{$users->lastPage()}} <br/>
              Jumlah Data : {{ $users->total() }} <br/>
              <!-- Data Per Halaman : {{ $users->perPage() }} <br/> -->
 
 
              {{ $users->links() }}
              </div>
              <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>

@foreach($users as $data)

<div class="modal fade" id="delete{{$data->id}}">
        <div class="modal-dialog modal-md">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h5 class="modal-title">{{$data->name}}</h5><br><br>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p><b> Apakah User dengan email {{$data->email}} </b><br>ingin Anda hapus?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tidak Ingin</button>
              <a href="users/delete/{{$data->id}}" type="button" class="btn btn-outline-light">Tentu Saja Iya</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
@endforeach


@endsection