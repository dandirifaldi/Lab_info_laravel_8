@extends('layout.v_template')
@section('title','All Items')

@section('content')
<ul class="nav nav-tabs">
      <li class="nav-item"><a data-toggle="tab" href="#hard" class="nav-link active">Hardware</a></li>
      <li class="nav-item"><a data-toggle="tab" href="#buku" class="nav-link">Buku</a></li>
      <li class="nav-item"><a data-toggle="tab" href="#furniture" class="nav-link">Furniture</a></li>
</ul>
<div class="tab-content">
<div id="hard" class="tab-pane active fade show ">
	<div class="container-fluid">
    <br>
    <a href="/barang/add" class="btn btn-sm btn-primary">Tambah Barang</a><br><br>
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
                <h3 class="card-title">Data Barang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Serial Number</th>
                    <th>Merk</th>
                    <th>Tipe</th>
                    <th>Category</th>
                    <th>Kondisi</th>
                    <th>Tanggal Masuk</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  	<?php $no=1 ?>
                  	@foreach($barang as $data)
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data->id_barang}}</td>
                    <td>{{$data->serial_number}}</td>
                    <td>{{$data->manufacturer}}</td>
                    <td>{{$data->type}}</td>
                    <td>{{$data->category}}</td>
                    <td>{{$data->kondisi}}</td>
                    <td>{{$data->tgl_masuk}}</td>
                    <td>{{$data->status}}</td>
                    <td>
                    	<a href="/barang/detail/{{$data->id_barang}}" class="btn btn-sm btn-success">Detail</a>
                    	<a href="/barang/edit/{{$data->id_barang}}" class="btn btn-sm btn-warning">Update</a>
                    	<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{$data->id_barang}}">
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

@foreach($barang as $data)

<div class="modal fade" id="delete{{$data->id_barang}}">
        <div class="modal-dialog modal-md">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h5 class="modal-title">{{$data->manufacturer}} {{$data->type}}</h5><br><br>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah Anda ingin menghapus data barang {{$data->manufacturer}} {{$data->type}} ini?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tidak Ingin</button>
              <a href="barang/delete/{{$data->id_barang}}" type="button" class="btn btn-outline-light">Tentu Saja Iya</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
@endforeach
</div>

<!-- BUKU========================================================================================== -->

<div id="buku" class="tab-pane fade show">
       <div class="container-fluid">
    <br>
    <a href="/barang/addBuku" class="btn btn-sm btn-primary">Tambah Buku</a><br><br>
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
                <h3 class="card-title">Data Buku</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Tahun</th>
                    <th>Tipe</th>
                    <th>Kondisi</th>
                    <th>Tanggal Masuk</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no1=1 ?>
                    @foreach($buku as $data1)
                  <tr>
                    <td>{{$no1++}}</td>
                    <td>{{$data1->id_buku}}</td>
                    <td>{{$data1->judul}}</td>
                    <td>{{$data1->penulis}}</td>
                    <td>{{$data1->tahun}}</td>
                    <td>{{$data1->type}}</td>
                    <td>{{$data1->kondisi}}</td>
                    <td>{{$data1->tgl_masuk}}</td>
                    <td>{{$data1->status}}</td>
                    <td>
                      <a href="/barang/detail/{{$data1->id_buku}}" class="btn btn-sm btn-success">Detail</a>
                      <a href="/barang/edit/{{$data1->id_buku}}" class="btn btn-sm btn-warning">Update</a>
                      <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{$data1->id_buku}}">
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

@foreach($buku as $data1)

<div class="modal fade" id="delete{{$data1->id_buku}}">
        <div class="modal-dialog modal-md">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h5 class="modal-title">{{$data1->judul}} Oleh {{$data1->penulis}}</h5><br><br>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah Anda ingin menghapus data buku {{$data1->judul}} oleh {{$data->penulis}} ini?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tidak Ingin</button>
              <a href="barang/delete/{{$data1->id_buku}}" type="button" class="btn btn-outline-light">Tentu Saja Iya</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
@endforeach
</div>


<!-- LAIN========================================================================================== -->
<div id="furniture" class="tab-pane fade show">
<div class="container-fluid">
    <br>
    <a href="/barang/addLain" class="btn btn-sm btn-primary">Tambah Barang</a><br><br>
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
                <h3 class="card-title">Data Barang Furniture</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Merk</th>
                    <th>Category</th>
                    <th>Kondisi</th>
                    <th>Tanggal Masuk</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no2=1 ?>
                    @foreach($furniture as $data2)
                  <tr>
                    <td>{{$no2++}}</td>
                    <td>{{$data2->id_furniture}}</td>
                    <td>{{$data2->merk}}</td>
                    <td>{{$data2->category}}</td>
                    <td>{{$data2->kondisi}}</td>
                    <td>{{$data2->tgl_masuk}}</td>
                    <td>{{$data2->status}}</td>
                    <td>
                      <a href="/barang/detail/{{$data2->id_furniture}}" class="btn btn-sm btn-success">Detail</a>
                      <a href="/barang/edit/{{$data2->id_furniture}}" class="btn btn-sm btn-warning">Update</a>
                      <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{$data2->id_furniture}}">
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

        @foreach($furniture as $data2)

<div class="modal fade" id="delete{{$data2->id_furniture}}">
        <div class="modal-dialog modal-md">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h5 class="modal-title">{{$data2->merk}}</h5><br><br>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah Anda ingin menghapus data barang {{$data2->merrk}} ini?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tidak Ingin</button>
              <a href="barang/delete/{{$data2->id_furniture}}" type="button" class="btn btn-outline-light">Tentu Saja Iya</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
@endforeach
</div>


</div>



@endsection