<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="<?=base_url('assets/images/logotitle.png')?>" type="image/gif">
  <title>SI BIMBEL | <?php echo $title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <?php echo link_tag('assets/bootstrap/css/bootstrap.min.css');
        echo link_tag('assets/plugins/datatables/jquery.dataTables.css"');
        echo link_tag('assets/plugins/datatables/dataTables.bootstrap.css');
  ?>
  <!-- Font Awesome -->
    <?php echo link_tag('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css');?>
  <!-- Theme style -->
  <?php echo link_tag('assets/dist/css/AdminLTE.min.css'); ?>
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <?php echo link_tag('assets/dist/css/skins/skin-blue.min.css'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Main Header -->
  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo current_url();?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>BFG</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Bimbel Forum Guru</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
               <img src="<?php echo base_url('assets/images/'.$this->session->foto);?>" class="user-image" alt="User Image"/>
               <span class="hidden-xs"><?php echo $this->session->nama;?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/images/'.$this->session->foto);?>" class="img-circle" alt="User Image"/><p>
                <?php echo $this->session->nama;?> - Administrator</p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                   <a href="<?php echo base_url('login/logout')?>" class="btn btn-default btn-flat">Logout</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

     <div class="user-panel">
       <div class="pull-left image">
         <img src="<?php echo base_url('assets/images/'.$this->session->foto);?>" class="img-circle" alt="User Image" />s</div>
       <div class="pull-left info">
         <p><?php echo $this->session->nama;?></p>
           <a href="#">Online</a>
       </div>
     </div>
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="<?php echo base_url('dashboard/show')?>"><i class="glyphicon glyphicon-dashboard"></i><span> DASHBOARD</span></a></li>
        <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-book"></i><span> DATA PENDAFTARAN</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('data/siswa/show')?>"><i class="glyphicon glyphicon-minus"></i> Siswa Bimbel</a></li>
            <li><a href="<?php echo base_url('data/wali/show')?>"><i class="glyphicon glyphicon-minus"></i> Wali / Orang Tua</a></li>
            <li><a href="<?php echo base_url('data/tentor/show')?>"><i class="glyphicon glyphicon-minus"></i> Tentor / Pengajar</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url('data/bimbel/show')?>"><i class="glyphicon glyphicon-tags" aria-hidden="true"></i><span> DATA BIMBEL</span></a></li>
        <li><a href="<?php echo base_url('data/pembayaran/show')?>"><i class="glyphicon glyphicon-usd" aria-hidden="true"></i><span> PEMBAYARAN</span></a></li>
        <li><a href="<?php echo base_url('data/penjadwalan/show')?>"><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i><span> PENJADWALAN</span></a></li>
        <li class="active treeview menu-open">
          <a href="#"><i class="glyphicon glyphicon-cog"></i><span> SETUP</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url('setup/program-pilihan/show')?>"><i class="glyphicon glyphicon-minus"></i> Program & Pilihan</a></li>
            <li><a href="<?php echo base_url('setup/biaya-diskon/show')?>"><i class="glyphicon glyphicon-minus"></i> Biaya & Diskon</a></li>
            <li><a href="<?php echo base_url('setup/tahun-ajaran/show')?>"><i class="glyphicon glyphicon-minus"></i> Tahun Ajaran</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url('laporan/bimbel-pembayaran')?>"><i class="glyphicon glyphicon-file" aria-hidden="true"></i><span> LAPORAN - LAPORAN</span></a></li>
        <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-user"></i><span> ADMINISTRATOR</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('administrator/show')?>"><i class="glyphicon glyphicon-minus"></i> Data Administrator</a></li>
            <li><a href="<?php echo base_url('administrator/setup-akun')?>"><i class="glyphicon glyphicon-minus"></i> Setup Akun</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url('login/logout')?>"><i class="glyphicon glyphicon-log-out" aria-hidden="true"></i><span> LOGOUT</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3><i class=""></i></h3>
      <ol class="breadcrumb">
        <li><a href="#"><i class="glyphicon glyphicon-home"></i> Home</a></li>
        <li class="active"><?php echo $title ?></li>
      </ol>
    </section>
    <!-- Main content -->
  <section class="content">
      <div class="box box-primary box-solid flat">
        <div class="box-body">
            <a href="<?php echo base_url('setup/program-pilihan/show')?>" class="btn btn-yahoo active btn-flat">Program & Pilihan</a> |
            <a href="<?php echo base_url('setup/biaya-diskon/show')?>" class="btn btn-yahoo btn-flat">Biaya & Diskon</a> |
            <a href="<?php echo base_url('setup/tahun-ajaran/show')?>" class="btn btn-yahoo btn-flat">Tahun Ajaran</a> |
        </div>
      </div>
        <div class="box box-primary flat">
            <div class="box-header with-border">
                <h4 class="box-tittle">Program Jenjang Bimbingan Belajar</h4>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-primary btn-sm" onclick="add_program()"><span class="glyphicon glyphicon-plus"></span> Program Bimbel</button>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped" id="programbimbel-dt">
                        <thead>
                            <tr class="info">
                                <th>Program Jenjang</th>
                                <th>Jenis Program</th>
                                <th>Biaya Total (Rp.)</th>
                                <th>Tools</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      <div class="row">
          <div class="col-sm-6 col-md-6">
              <div class="box box-primary flat">
                  <div class="box-header with-border">
                      <h4 class="box-tittle">Pilihan Program</h4>
                      <div class="box-tools pull-right">
                          <button type="button" class="btn btn-primary btn-sm" onclick="add_pilihan()"><span class="glyphicon glyphicon-plus"></span> Pilihan Program</button>
                      </div>
                  </div>
                  <div class="box-body">
                      <div class="table-responsive">
                          <table class="table table-bordered table-hover table-striped" id="pilihanprogram-dt">
                                  <thead>
                                    <tr class="info">
                                      <th>Pilihan Program</th>
                                      <th>Tools</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                  </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Main Footer -->
  <footer class="main-footer">
        <!-- To the right -->
    <div class="pull-right hidden-xs">

    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; BIMBEL FORUM GURU Malang<a href="#"></a></strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('assets/plugins/jQuery/jquery-2.2.3.min.js')?>"></script>

<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js')?>"></script>

<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/app.min.js')?>"></script>
</body>
</html>
<script type="text/javascript">
    var programbimbel_dt ;
    var pilihanprogram_dt;
    var method;
    var id_update_pilihan;
    var id_update_program_bimbel;
    $(document).ready(function (e) {
        programbimbel_dt = $("#programbimbel-dt").DataTable({
            "autoWidth": false,
            "processing": true,
            "serverSide": true,
            "ajax": {"url":"show_data_program", "type":"POST"},
            "columns": [
                {"data":'program_bimbel'},
                {"data": 'pilihan_program', "class": "text-center"},
                {"data": 'biaya_program'},
                {"data":"tools", "class": "text-center", "orderable":false}
            ],
        });
        pilihanprogram_dt = $("#pilihanprogram-dt").DataTable({
            "autoWidth": false,
            "processing": true,
            "serverSide": true,
            "ajax": {"url":"show_data_pilihan", "type":"POST"},
            "columns": [
                {"data":'pilihan_program'},
                {"data":"tools", "class": "text-center", "orderable":false}
            ],
        });
    });
    function trash_program(id_program_bimbel) {
      if (confirm("Hapus Program Bimbel Permanen !!!")){
          $.ajax({
              type: "POST",
              url: "trash_program",
              data: {id_program_bimbel:id_program_bimbel},
              success: function (data) {
                  if (data == 1){
                      programbimbel_dt.ajax.reload(null,false)
                  }
              }
          });
      }
    };
    function add_program() {
        method = "add_program"
        id_update_program_bimbel = ""
        $("#id_program_bimbel").val("")
        $("#form-program")[0].reset()
        $('.modal-title').html("Tambah Program Bimbel")
        $("#act_program").html("SIMPAN")
        hapus_hari_pertemuan()
        $("#modal-program").modal("show")

    };
    function edit_program(id_program_bimbel) {
        method ="update_program"
        id_update_program_bimbel = id_program_bimbel
        $("#form-program")[0].reset()
        $("#act_program").html("UPDATE")
        $('.modal-title').html("Detail Program Bimbel")
        //$('input[type="checkbox"]').prop('checked',false);
       // hapus_hari_pertemuan()

        $.ajax({
            type: "POST",
            url: "edit_program",
            dataType: "JSON",
            data: {id_program_bimbel:id_program_bimbel},
            success: function (data) {
                $('[name="program_bimbel"]').val(data.program_bimbel)
                $('[name="biaya_program"]').val(data.biaya_program)
                //pilihan program
                $('[name="materi_ajar"]').val(data.materi_ajar)
                $('[name="lama_belajar"]').val(data.lama_belajar)
                $('[name="jumlah_pertemuan"]').val(data.jumlah_pertemuan)
                cek_hari_pertemuan(data.hari_pertemuan) ///masih kurang saatu update yang lain, segera perbaiki
                $('[name="jam_pertemuan"]').val(data.jam_pertemuan)
                $('[name="keterangan_program"]').val(data.keterangan_program)
                $("#modal-program").modal("show")
            }
        });
    };
    function cek_hari_pertemuan(data) {
        $.each(data.split(','),function () {
            if(this == $('[name="Senin"]').val()){
                $('[name="Senin"]').prop("checked", true)
            } else if(this == $('[name="Selasa"]').val()){
                $('[name="Selasa"]').prop("checked", true)
            } else if(this == $('[name="Rabu"]').val()){
                $('[name="Rabu"]').prop("checked", true)
            } else if(this == $('[name="Kamis"]').val()){
                $('[name="Kamis"]').prop("checked", true)
            } else if(this == $('[name="Jumat"]').val()){
                $('[name="Jumat"]').prop("checked", true)
            } else if(this == $('[name="Sabtu"]').val()){
                $('[name="Sabtu"]').prop("checked", true)
            } else if(this == $('[name="Minggu"]').val()){
                $('[name="Minggu"]').prop("checked", true)
            }
        });
    }
    function hapus_hari_pertemuan() {
        $('[name="Senin"]').removeAttr("checked")
        $('[name="Selasa"]').removeAttr("checked")
        $('[name="Rabu"]').removeAttr("checked")
        $('[name="Kamis"]').removeAttr("checked")
        $('[name="Jumat"]').removeAttr("checked")
        $('[name="Sabtu"]').removeAttr("checked")
        $('[name="Minggu"]').removeAttr("checked")
    }
    function pertemuan() {
        var pertemuan = []
        if($('[name="Senin"]:checked').val() != undefined){
            pertemuan[pertemuan.length] = $('[name="Senin"]:checked').val()
        }
        if($('[name="Selasa"]:checked').val() != undefined){
            pertemuan[pertemuan.length] = $('[name="Selasa"]:checked').val()
        }
        if($('[name="Rabu"]:checked').val() != undefined){
            pertemuan[pertemuan.length] = $('[name="Rabu"]:checked').val()
        }
        if($('[name="Kamis"]:checked').val() != undefined){
            pertemuan[pertemuan.length] = $('[name="Kamis"]:checked').val()
        }
        if($('[name="Jumat"]:checked').val() != undefined){
            pertemuan[pertemuan.length] = $('[name="Jumat"]:checked').val()
        }
        if($('[name="Sabtu"]:checked').val() != undefined){
            pertemuan[pertemuan.length] = $('[name="Sabtu"]:checked').val()
        }
        if($('[name="Minggu"]:checked').val() != undefined){
            pertemuan[pertemuan.length] = $('[name="Minggu"]:checked').val()
        }
       return pertemuan.join()
    };
//    function halo() {
////        alert(hari_pertemuan())
////        alert($("#sapi:checked").val())
////        alert($("#form-program").serialize())
////        $.ajax({
////           type: "POST",
////           url: "halo",
////           data: {hari_pertemuan:$('[name="hari_pertemuan[]"]').val()},
////           success: function (data) {
////                alert(data)
////           }
////        });
//    };
    function save_program() {
        if ($('[name="program_bimbel"]').val() == ""){
            alert("Setiap Data Wajib Diisi !")
        }else {
            if (method == "add_program"){
                $.ajax({
                   type: "POST",
                   url: method,
                   data: {program_bimbel:$('[name="program_bimbel"]').val(),biaya_program:$('[name="biaya_program"]').val(),id_pilihan_program:$('[name="id_pilihan_program"]').val(),materi_ajar:$('[name="materi_ajar"]').val(),lama_belajar:$('[name="lama_belajar"]').val(),jumlah_pertemuan:$('[name="jumlah_pertemuan"]').val(),hari_pertemuan:pertemuan(),jam_pertemuan:$('[name="jam_pertemuan"]').val(),keterangan_program:$('[name="keterangan_program"]').val()},
                   success: function (data) {
                       if (data == 1){
                           $("#modal-program").modal("hide")
                           programbimbel_dt.ajax.reload(null,false)
                       }
                   }
                });
            }else if (method == "update_program"){
                $.ajax({
                    type: "POST",
                    url: method,
                    data: {id_program_bimbel:id_update_program_bimbel,program_bimbel:$('[name="program_bimbel"]').val(),biaya_program:$('[name="biaya_program"]').val(),id_pilihan_program:$('[name="id_pilihan_program"]').val(),materi_ajar:$('[name="materi_ajar"]').val(),lama_belajar:$('[name="lama_belajar"]').val(),jumlah_pertemuan:$('[name="jumlah_pertemuan"]').val(),hari_pertemuan:pertemuan(),jam_pertemuan:$('[name="jam_pertemuan"]').val(),keterangan_program:$('[name="keterangan_program"]').val()},
                    success: function (data) {
                     if (data == 1){
                         $("#modal-program").modal("hide")
                         programbimbel_dt.ajax.reload(null,false)
                     }
                    }
                });
            }
        }
    };
    function add_pilihan() {
        method = "add_pilihan"
        id_update_pilihan = ""
        $("#form-pilihan")[0].reset()
        $('.modal-title').html("Tambah Pilihan Program")
        $("#act_pilihan").html("SIMPAN")
        $('#modal-pilihan').modal("show")
    };
    function edit_pilihan(id_pilihan_program) {
        method = "update_pilihan"
        id_update_pilihan = id_pilihan_program
        $("#form-pilihan")[0].reset()
        $('.modal-title').html("Detail Pilihan Program")
        $("#act_pilihan").html("UPDATE")

        $.ajax({
            type: "POST",
            url: "edit_pilihan",
            dataType: "JSON",
            data: {id_pilihan_program:id_pilihan_program},
            success: function (data) {
                $('[name="pilihan_program"]').val(data.pilihan_program)
                $('[name="keterangan_pilihan"]').val(data.keterangan_pilihan)
                $('#modal-pilihan').modal("show")
            }
        });
    };
    function save_pilihan() {
        if ($('[name="pilihan_program"]').val() == ""){
            alert("Pilihan Program Wajib Diisi !!!")
        }else {
            if (method == "add_pilihan"){
                $.ajax({
                  type: "POST",
                  url: method,
                  data: $("#form-pilihan").serialize(),
                  success: function (data) {
                      if (data == 1){
                          $("#modal-pilihan").modal("hide")
                          pilihanprogram_dt.ajax.reload(null,false)
                      }
                  }
                });
            }else if(method = "update_pilihan"){
                $.ajax({
                    type: "POST",
                    url: method,
                    data: {id_pilihan_program:id_update_pilihan,pilihan_program:$('[name="pilihan_program"]').val(),keterangan_pilihan:$('[name="keterangan_pilihan"]').val()},
                    success: function (data) {
                        if (data == 1){
                            $("#modal-pilihan").modal("hide")
                            pilihanprogram_dt.ajax.reload(null,false)
                        }
                    }
                });
            }
        }
    };
    function trash_pilihan(id_pilihan_program) {        
        if (confirm("Hapus Pilihan Program Permanen !!!")){
            $.ajax({
                type: "POST",
                url: "trash_pilihan",
                data: {id_pilihan_program:id_pilihan_program},
                success: function (data) {
                    if (data == 1){
                        pilihanprogram_dt.ajax.reload(null,false)
                    }
                }
            });
        }
    };
</script>