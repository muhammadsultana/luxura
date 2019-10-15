  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Produk
        <small>Tambah produk baru</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Produk</li>
        <li class="active">Tambah produk</li>
      </ol>
    </section>

    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <?= form_open_multipart('admin/Produk/create') ?>
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label>Nama produk</label>
                <input type="text" class="form-control" name="nama_produk" placeholder="Tulis nama produk">
              </div>
              <div class="form-group">
                <label for="jenis">Jenis Produk</label>
                <div class="form-group" id="jenis">
                  <select class="form-control" name="jenis_produk">
                    <option>Kemeja</option>
                    <option>Kaos</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label>Harga</label>
                <input type="number" class="form-control" placeholder="Harga produk" name="harga_produk">
              </div>
              <div class="form-group">
                <label for="gambar">Gambar produk</label>
                <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*" required>
              </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
          <?= form_close() ?>
        </div>
      </div>
    </section>
  </div>