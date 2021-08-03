<!DOCTYPE html>
<html>
<head>
	<title>QR Code Data Barang</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		.bord{
			border: 1px solid black;
		}
	</style>
	{{$qr}}
	<div class="container bord">
		<div class="row">
			<div class="col-sm-4">{{$qr}}</div>
			<!-- <img src=""> -->
			<div class="col-sm-8">
				{{$qr}}<p>{{$barang->serial_number}}, {{$barang->manufacturer}} {{$barang->type}} <br>
					{{$barang->category}},{{ \Carbon\Carbon::parse($barang->tgl_masuk)->TranslatedFormat('l, d F Y')}}, {{$barang->lokasi}}</p>
			</div>
	</div>
	</div>
</body>
</html>