@extends('layout.v_template')
@section('title','Detail License')

@section('content')

	<table class="table table-sm" style="width: 500px;">
			<td class="font-weight-bold" scope="row">Software Name</td>
			<td>:</td>
			<td>{{$license->soft_name}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Manufacturer</td>
			<td>:</td>
			<td>{{$license->manufacturer}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">License Key</td>
			<td>:</td>
			<td>{{$license->license_key}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Category</td>
			<td>:</td>
			<td>{{$license->category}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">License to Name</td>
			<td>:</td>
			<td>{{$license->lcs_name}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">License to Email</td>
			<td>:</td>
			<td>{{$license->lcs_email}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Expired Date</td>
			<td>:</td>
			<td>{{ \Carbon\Carbon::parse($license->exp_date)->TranslatedFormat('l, d F Y')}} ({{\Carbon\Carbon::now()->addSeconds(strtotime($license->exp_date)-strtotime(now()))->diffForHumans()}})</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Purchase Date</td>
			<td>:</td>
			<td>{{ \Carbon\Carbon::parse($license->purchs_date)->translatedFormat('l, d F Y')}}</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Purchase Cost</td>
			<td>:</td>
			<td> @currency($license->purchs_cost)</td>
		</tr>
		<tr>
			<td class="font-weight-bold" scope="row">Note</td>
			<td>:</td>
			<td>{{$license->note}}</td>
		</tr>

	</table>
	<br>
<a href="/license" class="btn btn-success">Kembali</a>
<a href="/license/edit/{{$license->id_license}}" class="btn btn-warning">Update Data</a>
	<br>

@endsection