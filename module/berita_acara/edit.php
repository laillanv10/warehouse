<?php 
$aksi   = "module/".$_GET['module']."/action.php";
$edit=mysqli_fetch_array(mysqli_query($conn,"SELECT * from berita_acara where id='$_GET[id]'"));
?>
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">

      <h4 class="card-title"><?php echo strtoupper($_GET['act']) ?> <?php echo ucwords($_GET['module']) ?></h4>
      <p class="card-category">Pengisian yang belum disimpan akan hilang</p>
    </div>
    <div class="card-body">
      <form action="<?php echo $aksi."?module=".$_GET['module']."&act=".$_GET['act'] ?>" method="POST">
        <input type="hidden" name="id" value="<?php echo $edit['id'] ?>">
        <div class="row">

          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating"><?php echo ucwords('tanggal') ?></label>
              <input type="date" class="form-control" name="tanggal" value="<?php echo $edit['tanggal'] ?>">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating"><?php echo ucwords('no container') ?></label>
              <input type="text" class="form-control" name="no_container" value="<?php echo $edit['no_container'] ?>">
            </div>
          </div>
          
          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating"><?php echo ucwords('nama_kapal') ?></label>
              <input type="text" class="form-control" name="nama_kapal" value="<?php echo $edit['nama_kapal'] ?>">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating"><?php echo ucwords('Tanggal Datang') ?></label>
              <input type="date" class="form-control" name="tgl_datang" value="<?php echo $edit['tgl_datang'] ?>">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating"><?php echo ucwords('Konsolidator') ?></label>
              <input type="text" class="form-control" name="konsolidator" value="<?php echo $edit['konsolidator'] ?>">
            </div>
          </div>
          
          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating"><?php echo ucwords('importir') ?></label>
              <input type="text" class="form-control" name="importir" value="<?php echo $edit['importir'] ?>">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating"><?php echo ucwords('jenis_barang') ?></label>
              <input type="text" class="form-control" name="jenis_barang" value="<?php echo $edit['jenis_barang'] ?>">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating"><?php echo ucwords('weight') ?></label>
              <input type="text" class="form-control" name="weight" value="<?php echo $edit['weight'] ?>">
            </div>
          </div>
           <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating"><?php echo ucwords('kubikasi') ?></label>
              <input type="text" class="form-control" name="kubikasi" value="<?php echo $edit['kubikasi'] ?>">
            </div>
          </div>
           <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating"><?php echo ucwords('Keterangan') ?></label>
              <textarea class="form-control" name="keterangan"><?php echo $edit['keterangan'] ?></textarea>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary pull-right">Update Data</button>
        <div class="clearfix"></div>
      </form>
    </div>
  </div>
</div>