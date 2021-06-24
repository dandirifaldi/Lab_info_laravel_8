@extends('layout.v_template')
@section('title','Detail User')

@section('content')

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
			<td>{{$profile->created_at}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Updated At</td>
			<td>:</td>
			<td>{{$profile->updated_at}}</td>
		</tr>
	</table>
	<br>
<a href="/profile" class="btn btn-success">Kembali</a>
<a href="/profile/pass/{{$profile->id}}" class="btn btn-warning">Ganti Password</a>
	<br>

@endsection