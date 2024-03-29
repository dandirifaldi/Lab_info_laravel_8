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
    <div class="row mb-2">
      <div class="col-sm-2">
    <a href="/barang/add" class="btn btn-sm btn-primary">Tambah Barang</a></div>
    <div class="col-sm-9">
    <form action="/barang/update_status" method="post" id="form_perintah" class="form-inline">
      @csrf
      <div class="form-group from-inline">
      <select id="select-perintah" class="form-control form-control-sm" name="perintah">
        <option value="bagus">Bagus</option>
        <option value="maintenance">Maintenance</option>
        <option value="rusak">Rusak</option>
      </select>
    <!-- <button type="submit" class="btn btn-success btn-sm" disabled id="pilih-perintah" onclick="" style="display:inline;">Pindah</button> -->
    <button type="button" class="btn btn-sm btn-success mr-1" disabled id="pilih-perintah" onclick="btn_perintah_maintenance()" style="display:inline;">Pilih</buttton>
    </div>
    </form>
    <!-- <button type="button" class="btn btn-sm btn-outline-success mr-1" disabled id="pilih-perintah3" onclick="btn_perintah_bagus()" style="display:inline;">Update Bagus</buttton> -->
    <!-- <button type="button" class="btn btn-sm btn-outline-danger mr-1" disabled id="pilih-perintah2" onclick="btn_perintah_rusak()" style="display:inline;">Update Rusak</buttton> -->
  </div>
  </div>

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
                <h3 class="card-title">Data Barang</h3>
                </div>
                <div class="col-md-3 float-right">
                  <form action="/barang/search" method="get" class="form-inline">
                    <div class="form-group">
                  <input type="text" class="form-control form-control-sm" value="{{old('cari')}}" name="cari" placeholder="Cari...">
                  <!-- <span class="input-group-btn"> -->
                  <button class="btn btn-primary btn-sm my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                  <!-- </span> -->
              </div>
                </form>
                </div>
            </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover table-sm table-responsive-sm text-center">
                  <thead>
                  <tr>
                    <th><input type="checkbox" name="pilih" id="chkCheckAll"></th>
                    <th>No</th>
                    <!-- <th>ID</th> -->
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
                    <td class="align-middle"><input type="checkbox" class="checkBoxClass" value="{{$data->id_barang}}"></td>
                    <td class="align-middle">{{$no++}}</td>
                    <!-- <td class="align-middle">{{$data->id_barang}}</td> -->
                    <td class="align-middle">{{$data->serial_number}}</td>
                    <td class="align-middle">{{$data->manufacturer}}</td>
                    <td class="align-middle">{{$data->type}}</td>
                    <td class="align-middle">{{$data->category}}</td>
                    <td class="align-middle">{{$data->kondisi}}</td>
                    <td class="align-middle">{{$data->tgl_masuk}}</td>
                    <td class="align-middle">{{$data->status}}</td>
                    <td class="align-middle">
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
              Halaman {{ $barang->currentPage() }} dari {{$barang->lastPage()}} <br/>
              Jumlah Data : {{ $barang->total() }} <br/>
              <!-- Data Per Halaman : {{ $barang->perPage() }} <br/> -->
 
 
              {{ $barang->links() }}
              </div>
              <!-- /.card-body -->


            </div>
        </div>
    </div>
</div><br>
  
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
    <!-- <a href="/barang/addBuku" class="btn btn-sm btn-primary">Tambah Buku</a><br><br> -->
    <div class="row mb-2">
      <div class="col-sm-2">
    <a href="/barang/add" class="btn btn-sm btn-primary">Tambah Buku</a></div>
    <div class="col-sm-9">
    <form action="/buku/update_status" method="post" id="form_perintah" class="form-inline">
      @csrf
      <div class="form-group from-inline">
      <select id="select-perintah" class="form-control form-control-sm" name="perintah">
        <option value="bagus">Bagus</option>
        <option value="maintenance">Maintenance</option>
        <option value="rusak">Rusak</option>
      </select>
    <!-- <button type="submit" class="btn btn-success btn-sm" disabled id="pilih-perintah" onclick="" style="display:inline;">Pindah</button> -->
    <button type="button" class="btn btn-sm btn-success mr-1" disabled id="pilih-perintah" onclick="btn_perintah_maintenance()" style="display:inline;">Pilih</buttton>
    </div>
    </form>
    <!-- <button type="button" class="btn btn-sm btn-outline-success mr-1" disabled id="pilih-perintah3" onclick="btn_perintah_bagus()" style="display:inline;">Update Bagus</buttton> -->
    <!-- <button type="button" class="btn btn-sm btn-outline-danger mr-1" disabled id="pilih-perintah2" onclick="btn_perintah_rusak()" style="display:inline;">Update Rusak</buttton> -->
  </div>
  </div>


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
                <h3 class="card-title">Data Buku</h3>
                </div>
                <div class="col-md-3 float-right">
                  <form action="/barang/searchBuku" method="get" class="form-inline">
                    <div class="form-group">
                  <input type="text" class="form-control form-control-sm" value="{{old('cari')}}" name="cari" placeholder="Cari...">
                  <!-- <span class="input-group-btn"> -->
                  <button class="btn btn-primary btn-sm my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                  <!-- </span> -->
              </div>
                </form>
                </div>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="examplebook" class="table table-bordered table-hover table-sm table-responsive-sm text-center">
                  <thead>
                  <tr>
                    <th><input type="checkbox" name="pilih" id="chkCheckAllBook"></th>
                    <th>No</th>
                    <!-- <th>ID</th> -->
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
                    <td class="align-middle"><input type="checkbox" class="checkBoxBook" value="{{$data1->id_buku}}"></td>
                    <td>{{$no1++}}</td>
                    <!-- <td>{{$data1->id_buku}}</td> -->
                    <td>{{$data1->judul}}</td>
                    <td>{{$data1->penulis}}</td>
                    <td>{{$data1->tahun}}</td>
                    <td>{{$data1->tipe}}</td>
                    <td>{{$data1->kondisi}}</td>
                    <td>{{$data1->tgl_masuk}}</td>
                    <td>{{$data1->status}}</td>
                    <td>
                      <a href="/barang/detailBuku/{{$data1->id_buku}}" class="btn btn-sm btn-success">Detail</a>
                      <a href="/barang/editBuku/{{$data1->id_buku}}" class="btn btn-sm btn-warning">Update</a>
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
                Halaman {{ $buku->currentPage() }} dari {{$buku->lastPage()}} <br/>
              Jumlah Data : {{ $buku->total() }} <br/>
              <!-- Data Per Halaman : {{ $buku->perPage() }} <br/> -->
 
 
              {{ $buku->links() }}
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
              <p>Apakah Anda ingin menghapus data buku {{$data1->judul}} oleh {{$data1->penulis}} ini?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tidak Ingin</button>
              <a href="barang/deleteBuku/{{$data1->id_buku}}" type="button" class="btn btn-outline-light">Tentu Saja Iya</a>
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
    <!-- <a href="/barang/addFurniture" class="btn btn-sm btn-primary">Tambah Barang</a><br><br> -->
    <div class="row mb-2">
      <div class="col-sm-2">
    <a href="/barang/add" class="btn btn-sm btn-primary">Tambah Barang</a></div>
    <div class="col-sm-9">
    <form action="/barang/update_status" method="post" id="form_perintah" class="form-inline">
      @csrf
      <div class="form-group from-inline">
      <select id="select-perintah" class="form-control form-control-sm" name="perintah">
        <option value="bagus">Bagus</option>
        <option value="maintenance">Maintenance</option>
        <option value="rusak">Rusak</option>
      </select>
    <!-- <button type="submit" class="btn btn-success btn-sm" disabled id="pilih-perintah" onclick="" style="display:inline;">Pindah</button> -->
    <button type="button" class="btn btn-sm btn-success mr-1" disabled id="pilih-perintah" onclick="btn_perintah_maintenance()" style="display:inline;">Pilih</buttton>
    </div>
    </form>
    <!-- <button type="button" class="btn btn-sm btn-outline-success mr-1" disabled id="pilih-perintah3" onclick="btn_perintah_bagus()" style="display:inline;">Update Bagus</buttton> -->
    <!-- <button type="button" class="btn btn-sm btn-outline-danger mr-1" disabled id="pilih-perintah2" onclick="btn_perintah_rusak()" style="display:inline;">Update Rusak</buttton> -->
  </div>
  </div>

    
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
                <h3 class="card-title">Data Barang Furniture</h3>
                </div>
                <div class="col-md-3 float-right">
                  <form action="/barang/searchFurniture" method="get" class="form-inline">
                    <div class="form-group">
                  <input type="text" class="form-control form-control-sm" value="{{old('cari')}}" name="cari" placeholder="Cari...">
                  <!-- <span class="input-group-btn"> -->
                  <button class="btn btn-primary btn-sm my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                  <!-- </span> -->
              </div>
                </form>
                </div>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="examplefurniture" class="table table-bordered table-hover table-sm table-responsive-sm text-center">
                  <thead>
                  <tr>
                    <th><input type="checkbox" name="pilih" id="chkCheckAllFurniture"></th>
                    <th>No</th>
                    <!-- <th>ID</th> -->
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
                    <td class="align-middle"><input type="checkbox" class="checkBoxFurniture" value="{{$data2->id_furniture}}"></td>
                    <td>{{$no2++}}</td>
                    <!-- <td>{{$data2->id_furniture}}</td> -->
                    <td>{{$data2->merk}}</td>
                    <td>{{$data2->category}}</td>
                    <td>{{$data2->kondisi}}</td>
                    <td>{{$data2->tgl_masuk}}</td>
                    <td>{{$data2->status}}</td>
                    <td>
                      <a href="/barang/detailFurniture/{{$data2->id_furniture}}" class="btn btn-sm btn-success">Detail</a>
                      <a href="/barang/editFurniture/{{$data2->id_furniture}}" class="btn btn-sm btn-warning">Update</a>
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
                Halaman {{ $furniture->currentPage() }} dari {{$buku->lastPage()}} <br/>
              Jumlah Data : {{ $furniture->total() }} <br/>
              <!-- Data Per Halaman : {{ $furniture->perPage() }} <br/> -->
 
 
              {{ $furniture->links() }}
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
              <p>Apakah Anda ingin menghapus data barang {{$data2->merk}} ini?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tidak Ingin</button>
              <a href="barang/deleteFurniture/{{$data2->id_furniture}}" type="button" class="btn btn-outline-light">Tentu Saja Iya</a>
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