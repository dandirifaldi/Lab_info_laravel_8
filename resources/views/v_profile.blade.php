@extends('layout.v_template')
@section('title','Detail User')

@section('content')
@if(session('pesanUpdate'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses!!</strong> Data Berhasil Diupdate.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
	<table class="table table-sm" style="width: 500px;">
			<td class="font-weight-bold" scope="row">ID</td>
			<td>:</td>
			<td>{{$profile->id}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Name</td>
			<td>:</td>	
			<td>{{$profile->name}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Email</td>
			<td>:</td>
			<td>{{$profile->email}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Created At</td>
			<td>:</td>
			<td>{{ \Carbon\Carbon::parse($profile->created_at)->translatedFormat('l, d F Y')}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Updated At</td>
			<td>:</td>
			<td>{{ \Carbon\Carbon::parse($profile->updated_at)->translatedFormat('l, d F Y')}}</td>
		</tr>
	</table>
	<br>
<a href="/profile/edit/{{$profile->id}}" class="btn btn-success">Edit</a>
<a href="/profile/pass/{{$profile->id}}" class="btn btn-warning">Ganti Password</a>
	<br>

@endsection