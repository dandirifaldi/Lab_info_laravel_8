@extends('layout.v_template')
@section('title','Detail Barang')

@section('content')
	<table class="table table-sm" style="width: 500px;">
		<tr>
			<td class="font-weight-bold" scope="row">ID Barang</td>
			<td>:</td>
			<td>{{$barang->id_barang}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Serial Number</td>
			<td>:</td>
			<td>{{$barang->serial_number}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Merk Barang</td>
			<td>:</td>
			<td>{{$barang->manufacturer}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Tipe</td>
			<td>:</td>
			<td>{{$barang->type}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Kategori</td>
			<td>:</td>
			<td>{{$barang->category}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Kondisi</td>
			<td>:</td>
			<td>{{$barang->kondisi}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Status Barang</td>
			<td>:</td>
			<td>{{$barang->status}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Tanggal Masuk</td>
			<td>:</td>
			<td>{{ \Carbon\Carbon::parse($barang->tgl_masuk)->TranslatedFormat('l, d F Y')}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Harga</td>
			<td>:</td>
			<td>@currency($barang->harga)</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Lokasi Barang</td>
			<td>:</td>
			<td> {{$barang->lokasi}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Keterangan </td>
			<td>:</td>
			<td>{{$barang->keterangan}}</td>
		</tr>

	</table>
	<h3>Detail Pembelian Barang</h3>
	<table class="table table-sm" style="width: 800px;">
		<tr>
			<td class="font-weight-bold" scope="row">Nama Toko</td>
			<td>:</td>
			<td>{{$barang->nama_toko}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Nomor Telpon Toko</td>
			<td>:</td>
			<td>{{$barang->no_telp_toko}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Alamat Toko</td>
			<td>:</td>
			<td>{{$barang->alamat_toko}}</td>
		</tr>
	</table>
<a href="/barang" class="btn btn-success">Kembali</a>
<a href="/barang/edit/{{$barang->id_barang}}" class="btn btn-warning">Update Data</a>
	<br>

@endsection