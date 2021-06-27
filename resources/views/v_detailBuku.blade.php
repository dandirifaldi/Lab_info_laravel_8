@extends('layout.v_template')
@section('title','Detail Buku')

@section('content')
	<table class="table table-sm" style="width: 500px;">
		<tr>
			<td class="font-weight-bold" scope="row">ID Buku</td>
			<td>:</td>
			<td>{{$buku->id_buku}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Judul</td>
			<td>:</td>
			<td>{{$buku->judul}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Penulis Buku</td>
			<td>:</td>
			<td>{{$buku->penulis}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Tahun</td>
			<td>:</td>
			<td>{{$buku->tahun}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Tipe</td>
			<td>:</td>
			<td>{{$buku->tipe}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Kondisi</td>
			<td>:</td>
			<td>{{$buku->kondisi}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Status buku</td>
			<td>:</td>
			<td>{{$buku->status}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Tanggal Masuk</td>
			<td>:</td>
			<td>{{ \Carbon\Carbon::parse($buku->tgl_masuk)->TranslatedFormat('l, d F Y')}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Jumlah Buku</td>
			<td>:</td>
			<td>{{$buku->jumlah_buku}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Lokasi buku</td>
			<td>:</td>
			<td> {{$buku->lokasi}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Keterangan </td>
			<td>:</td>
			<td>{{$buku->keterangan}}</td>
		</tr>

	</table>
<a href="/barang" class="btn btn-success">Kembali</a>
<a href="/barang/editBuku/{{$buku->id_buku}}" class="btn btn-warning">Update Data</a>
	<br>

@endsection