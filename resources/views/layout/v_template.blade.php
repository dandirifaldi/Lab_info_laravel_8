
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Inventory Laboratorium Informatika</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template/')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template/')}}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <h3 class="display mt-1">Sistem Inventory Lab Komputer</h3>
      </li>
<!--       <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <!-- Navbar Search -->
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
 -->
      <!-- fullscreen -->
    <!--   <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li> -->


      <!-- User Account -->
          <li class="nav-item dropdown user-menu" style="padding-top: 10px; margin-right: 15px;">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('images/')}}/logo.png" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{asset('images/')}}/logo.png" class="img-circle" alt="User Image">

                <p>
                  {{ Auth::user()->name }}-{{ Auth::user()->email }}
                  <!-- <small>Member since Nov. 2012</small> -->
                </p>
              </li>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="float-left">
                  <a href="/profile/{{Auth::user()->id}}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="float-right">
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                    @csrf
                    <button type="submit" class="btn btn-default btn-flat">Log out</button>
                  </form>
                </div>
              </li>
            </ul>
          </li>






<!--       <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{asset('images/')}}/logo-ITI.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Lab Informatika</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('images/')}}/logo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/profile/{{Auth::user()->id}}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      @include('layout.v_nav')
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>@yield('title')</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    	@yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 0.1.0
    </div>
    <strong>Copyright &copy; 2021 Kelompok 4 PPL.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('template/')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('template/')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('template/')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('template/')}}/dist/js/demo.js"></script>
<!-- Mask JS -->
<script src="{{asset('template/')}}/plugins/jquery/jquery.mask.min.js"></script>
<script type="text/javascript">
   $(document).ready(function(){

                // Format mata uang.
                $('.uang').mask('000.000.000.000.000.000', {reverse: true});

            })
  function hitung()
      {
        var harga = (document.getElementById('harga').value == '' ? 0:document.getElementById('harga').value);
        var jumlah = (document.getElementById('jumlah').value == '' ? 0:document.getElementById('jumlah').value);

        var result = parseInt(harga) * parseInt(jumlah);
        if (!isNaN(result)) {
           document.getElementById('total').value = result;
        }
      }
</script>
<script>
    $(function(e){
      $("#chkCheckAll").on('click',function(){
        var isChecked = $("#chkCheckAll").prop('checked')
        $(".checkBoxClass").prop('checked',isChecked)
        $("#pilih-perintah").prop('disabled',!isChecked);          
        $("#pilih-perintah2").prop('disabled',!isChecked);          
        $("#pilih-perintah3").prop('disabled',!isChecked);          
      })
      $("#chkCheckAllBook").on('click',function(){
        var isChecked = $("#chkCheckAllBook").prop('checked')
        $(".checkBoxBook").prop('checked',isChecked);
        $("#pilih-perintah").prop('disabled',!isChecked);          
        $("#pilih-perintah2").prop('disabled',!isChecked);          
        $("#pilih-perintah3").prop('disabled',!isChecked);          
      })
      $("#chkCheckAllFurniture").on('click',function(){
        var isChecked = $("#chkCheckAllFurniture").prop('checked')
        $(".checkBoxFurniture").prop('checked',isChecked);
        $("#pilih-perintah").prop('disabled',!isChecked);
        $("#pilih-perintah2").prop('disabled',!isChecked);
        $("#pilih-perintah3").prop('disabled',!isChecked);
      })


      $("#example2 tbody").on('click','.checkBoxClass',function(){
        if ($(this).prop('checked')!=true){
          $("#chkCheckAll").prop('checked',false)
          $("#pilih-perintah").prop('disabled',true);
          $("#pilih-perintah2").prop('disabled',true);
          $("#pilih-perintah3").prop('disabled',true);
        }
        let semua_chckbox = $("#example2 tbody .checkBoxClass:checked")
        let button_status=(semua_chckbox.length>0)
        $("#pilih-perintah").prop('disabled',!button_status)
        $("#pilih-perintah2").prop('disabled',!button_status)
        $("#pilih-perintah3").prop('disabled',!button_status)
      })

       $("#examplebook tbody").on('click','.checkBoxBook',function(){
        if ($(this).prop('checked')!=true){
          $("#chkCheckAllBook").prop('checked',false)
        }let semua_chckbox = $("#examplebook tbody .checkBoxBook:checked")
        let button_status=(semua_chckbox.length>0)
        $("#pilih-perintah").prop('disabled',!button_status)
        $("#pilih-perinta2").prop('disabled',!button_status)
        $("#pilih-perinta3").prop('disabled',!button_status)
      })
        $("#examplefurniture tbody").on('click','.checkBoxFurniture',function(){
        if ($(this).prop('checked')!=true){
          $("#chkCheckAllFurniture").prop('checked',false)
        }let semua_chckbox = $("#examplefurniture tbody .checkBoxFurniture:checked")
        let button_status=(semua_chckbox.length>0)
        $("#pilih-perintah").prop('disabled',!button_status)
        $("#pilih-perinta2").prop('disabled',!button_status)
        $("#pilih-perinta3").prop('disabled',!button_status)
      })
    });

    function btn_perintah_maintenance() {
        // var valuePerintah = document.getElementById("perintah").value;
        let checkboxTerpilih  = $("#example2 tbody .checkBoxClass:checked")
        let semua_id= []
        $.each(checkboxTerpilih,function(index,elm){
          semua_id.push(elm.value)
        })
        console.log(semua_id);
        // console.log(valuePerintah);
        $("#pilih-perintah").prop("disabled",true)
        // var data = JSON.stringify({ 
        //          'ids': semua_id,
        //          'pilih':valuePerintah
        //        });
        $.ajax({
          url:"{{url('')}}/barang/update_status_maintenance",
          type:"post",
          data: {ids:semua_id},
          success:function(){
            console.log("Added");
            location.reload();
          }
        })
      }

function btn_perintah_rusak() {
        // var valuePerintah = document.getElementById("perintah").value;
        let checkboxTerpilih  = $("#example2 tbody .checkBoxClass:checked")
        let semua_id= []
        $.each(checkboxTerpilih,function(index,elm){
          semua_id.push(elm.value)
        })
        console.log(semua_id);
        // console.log(valuePerintah);
        $("#pilih-perintah").prop("disabled",true)
        // var data = JSON.stringify({ 
        //          'ids': semua_id,
        //          'pilih':valuePerintah
        //        });
        $.ajax({
          url:"{{url('')}}/barang/update_status_rusak",
          type:"post",
          data: {ids:semua_id},
          success:function(){
            console.log("Added");
            location.reload();
          }
        })
      }
function btn_perintah_bagus() {
        // var valuePerintah = document.getElementById("perintah").value;
        let checkboxTerpilih  = $("#example2 tbody .checkBoxClass:checked")
        let semua_id= []
        $.each(checkboxTerpilih,function(index,elm){
          semua_id.push(elm.value)
        })
        console.log(semua_id);
        // console.log(valuePerintah);
        $("#pilih-perintah").prop("disabled",true)
        // var data = JSON.stringify({ 
        //          'ids': semua_id,
        //          'pilih':valuePerintah
        //        });
        $.ajax({
          url:"{{url('')}}/barang/update_status_bagus",
          type:"post",
          data: {ids:semua_id},
          success:function(){
            console.log("Added");
            location.reload();
          }
        })
      }
      // $("#form").submit(function(e) {
      //   e.preventDefault();
      //   // var form_input = form.serializeArray();
      //   let checkboxTerpilih  = $("#example2 tbody .checkBoxClass:checked")
      //   let semua_id= []
      //   $.each(checkboxTerpilih,function(index,elm){
      //     semua_id.push(elm.value)
      //   })
      //   // form_input.push({
      //   // name: '_token',
      //   // value: '{{csrf_token()}}'
      //   // });
      //   // form_input.push({
      //   // name: 'hash',
      //   // value: 9999
      //   // });
      //   $.ajax({
      //   url : '{{url('')}}/barang/update_status',
      //   type: "POST",
      //   data: {ids:semua_id}, 
      //   success : function () {
      //       console.log("Added");
      //   }
      // })
      // });
</script>
</body>
</html>