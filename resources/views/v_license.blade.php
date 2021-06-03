@extends('layout.v_template')
@section('title','License')

@section('content')
	<div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data License</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Software</th>
                    <th>Product Key</th>
                    <th>Expired Date</th>
                    <th>Manufacturer</th>
                    <th>License to Name</th>
                    <th>License to Email</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  	<?php $no=1 ?>
                  	@foreach($license as $data)
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data->soft_name}}</td>
                    <td>{{$data->license_key}}</td>
                    <td>{{$data->exp_date}}</td>
                    <td>{{$data->manufacturer}}</td>
                    <td>{{$data->lcs_name}}</td>
                    <td>{{$data->lcs_email}}</td>
                    <td>
                    	<a href="#" class="btn btn-sm btn-success">Detail</a>
                    	<a href="#" class="btn btn-sm btn-warning">Update</a>
                    	<a href="#" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <!-- <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr> -->
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>
@endsection