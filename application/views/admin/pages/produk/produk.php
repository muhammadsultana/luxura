  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Produk
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="col-xs-12">
        <!-- Data kaos -->
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Tabel data kemeja</h3>
            <a href="<?= base_url('admin/Produk/form')?>" class="btn btn-primary" style="float: right"><i class="fa fa-plus"></i> Tambah baju</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="produkTable" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>No</th>
                <th>Nama produk</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>Other browsers</td>
                <td>All others</td>
                <td>-</td>
                <td>-</td>
                <td>U</td>
              </tr>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>

        <!-- Data kemeja -->
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Tabel data kaos</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="produkTable" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>No</th>
                <th>Nama produk</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
              <?php $no = 1; foreach($kaos as $value) { ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $value->nama_produk ?></td>
                <td><?= $value->harga_produk ?></td>
                <td><img height="20" width="20" src="<?= asset_url('uploads/images/' . $value->gambar)?>" alt="Gambar produk"></td>
                <td>U</td>
              </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
    </section>
  </div>

  <script>
    $('#produkTable').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  </script>