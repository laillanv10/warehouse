<?php 
$aksi   = "module/".$_GET['module']."/action.php";
?>
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">

      <h4 class="card-title"><?php echo strtoupper($_GET['act']) ?> <?php echo ucwords($_GET['module']) ?></h4>
      <p class="card-category">Pengisian yang belum disimpan akan hilang</p>
    </div>
    <div class="card-body">
      <form action="<?php echo $aksi."?module=".$_GET['module']."&act=".$_GET['act'] ?>" method="POST">
        <div class="row">


          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating"><?php echo ucwords('consolidator') ?></label>
              <input type="text" class="form-control" name="consolidator">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating"><?php echo ucwords('no container') ?></label>
              <input type="text" class="form-control" name="no_container">
            </div>
          </div>
          
          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating"><?php echo ucwords('kondisi kontainer') ?></label>
              <input type="text" class="form-control" name="kondisi_container">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating"><?php echo ucwords('no segel') ?></label>
              <input type="text" class="form-control" name="no_segel">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating"><?php echo ucwords('no mbl') ?></label>
              <input type="text" class="form-control" name="no_mbl">
            </div>
          </div>
          
          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating"><?php echo ucwords('no order') ?></label>
              <input type="text" class="form-control" name="no_order">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating"><?php echo ucwords('tanggal') ?></label>
              <input type="date" class="form-control" name="tanggal" value="<?php echo date('Y-m-d') ?>">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating"><?php echo ucwords('kapal') ?></label>
              <input type="text" class="form-control" name="kapal">
            </div>
          </div>
           <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating"><?php echo ucwords('voy') ?></label>
              <input type="text" class="form-control" name="voy">
            </div>
          </div>
           <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating"><?php echo ucwords('Tanggal Tiba') ?></label>
              <input type="date" class="form-control" name="tgl_tiba" value="<?php echo date('Y-m-d') ?>">
            </div>
          </div>
        </div>


        <button type="submit" class="btn btn-primary pull-right">Save Data</button>
        <div class="clearfix"></div>
      </form>
    </div>
  </div>
</div>