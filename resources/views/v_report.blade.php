@extends('layout.v_template')
@section('title','Reports')

@section('content')
	<!-- Small Box (Stat card) -->
        <!-- <h5 class="mb-2 mt-4">Small Box</h5> -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$barang}}</h3>

                <p>Barang</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-area"></i>
              </div>
              <a href="/barang/export_excel" class="small-box-footer">
                Cetak report <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$license}}</h3>

                <p>License</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-bar"></i>
              </div>
              <a href="#" class="small-box-footer">
                Cetak Laporan <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$maintenance}}</h3>

                <p>Barang Maintenance</p>
              </div>
              <div class="icon">
                <i class="fas fa-server"></i>
              </div>
              <a href="#" class="small-box-footer">
                Cetak Barang <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$rusak}}</h3>

                <p>Barang Rusak</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-pie"></i>
              </div>
              <a href="#" class="small-box-footer">
                Cetak Laporan <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
        </div>
@endsection