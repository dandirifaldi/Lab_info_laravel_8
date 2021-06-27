@extends('layout.v_template')
@section('title','Detail Furniture')

@section('content')
	<table class="table table-sm" style="width: 500px;">
		<tr>
			<td class="font-weight-bold" scope="row">ID Furniture</td>
			<td>:</td>
			<td>{{$furniture->id_furniture}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Merk</td>
			<td>:</td>
			<td>{{$furniture->merk}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Kategori</td>
			<td>:</td>
			<td>{{$furniture->category}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Jumlah</td>
			<td>:</td>
			<td>{{$furniture->jumlah}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Kondisi</td>
			<td>:</td>
			<td>{{$furniture->kondisi}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Status furniture</td>
			<td>:</td>
			<td>{{$furniture->status}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Tanggal Masuk</td>
			<td>:</td>
			<td>{{ \Carbon\Carbon::parse($furniture->tgl_masuk)->TranslatedFormat('l, d F Y')}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Lokasi furniture</td>
			<td>:</td>
			<td> {{$furniture->lokasi}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Keterangan </td>
			<td>:</td>
			<td>{{$furniture->keterangan}}</td>
		</tr>

	</table>
<a href="/barang" class="btn btn-success">Kembali</a>
<a href="/barang/editFurniture/{{$furniture->id_furniture}}" class="btn btn-warning">Update Data</a>
	<br>

@endsection