@extends('layout.v_template')
@section('title','Detail User')

@section('content')

	<table class="table table-sm" style="width: 500px;">
			<td class="font-weight-bold" scope="row">ID</td>
			<td>:</td>
			<td>{{$users->id}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Name</td>
			<td>:</td>
			<td>{{$users->name}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Email</td>
			<td>:</td>
			<td>{{$users->email}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Created At</td>
			<td>:</td>
			<td>{{$users->created_at}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Updated At</td>
			<td>:</td>
			<td>{{$users->updated_at}}</td>
		</tr>
	</table>
	<br>
<a href="/users" class="btn btn-success">Kembali</a>
<a href="/users/edit/{{$users->id}}" class="btn btn-warning">Update Data</a>
	<br>

@endsection