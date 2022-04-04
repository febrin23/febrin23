<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- css -->
  <?php $this->load->view('include/base_css'); ?>
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/plugins/datatables/dataTables.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- navbar -->
<?php $this->load->view('include/base_nav'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List Kendaraan Keluar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('keluar/listkendaraankeluar') ?>">List Kendaraan</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
       <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-default"><br>
                  <!-- /.card-header -->
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Kode Karcis</th>
                        <!-- <th>Plat Nomor</th> -->
                        <th>Jam Masuk</th>
                        <th>Jam Keluar</th>
                        <th>Lama Parkir</th>
                        <th>Tarif</th>
                        <th>Durasi</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php foreach ($keluar as $row) { ?>
                      <tr>
                        <td><?php echo $row['kd_keluar'] ?></td>
                        <!-- <td><?php //echo $row['plat_keluar'] ?></td> -->
                        <td><?php echo date('H:i:s',strtotime($row['tgl_jam_masuk'])) ?></td>
                        <td><?php echo date('H:i:s',strtotime($row['tgl_jam_keluar'])) ?></td>
                        <td><?php echo $row['lama_parkir_keluar']; ?></td>
                        <td>Rp <?php echo $row['total_keluar'] ?></td>
                        <td><?php echo date('h:m:s',strtotime($row['durasi'])) ?></td>
                        <td><a href="<?php echo base_url('keluar/cetakstruk/'.$row['kd_keluar']) ?>"><i class="fa fa-barcode"></i></a> | <a href="<?php echo base_url('keluar/delete/'.$row['kd_keluar']) ?>"><i class="fa fa-trash"></i></a></td>
                      </tr>
                    <?php } ?>
                    </tfoot>
                    </table>
                  </div>
                  <!-- /.card -->
                </div>
              </div>           
            </div>          
    </section> 
    <div>

    <?php $this->load->view('include/base_footer'); ?> 

  </div>

  <!-- footer -->
  <?php //$this->load->view('include/base_footer'); ?>

</div>


<!-- script -->
<?php $this->load->view('include/base_js'); ?>
<script src="<?php echo base_url('assets') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
      <script src="<?php echo base_url('assets') ?>/plugins/datatables/dataTables.bootstrap4.min.js"></script>
      <!-- page script -->
      <script>
        $(function () {
          $("#example1").DataTable();
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
          });
        });
      </script>
</body>
</html>
