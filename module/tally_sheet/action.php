<?php 
include '../../config/koneksi.php';
include '../../config/upload.php';
$user   = $_SESSION['id_user'];
$now    = date('Y-m-d H:i:s');
$table  = 'tally_sheet';
$module = $_GET['module'];
$act    = $_GET['act'];
if($act == 'create'){
    $sql="INSERT INTO ".$table." (consolidator, no_container, kondisi_container, no_segel,no_mbl,no_order,tanggal,kapal,voy,tgl_tiba)
    VALUES ('".$_POST['consolidator']."', '".$_POST['no_container']."', '".$_POST['kondisi_container']."','".$_POST['no_segel']."','".$_POST['no_mbl']."','".$_POST['no_order']."','".$_POST['tanggal']."','".$_POST['kapal']."','".$_POST['voy']."','".$_POST['tgl_tiba']."')";
    $query = mysqli_query($conn,$sql);
    $_SESSION['flash']['class']='alert alert-success';
    $_SESSION['flash']['label']='Penambahan '.$_GET['module'].' Berhasil';
    $_SESSION['flash']['icon']='fa fa-check';
    header('Location: ../../media.php?module='.$module);
}else if($act == 'edit'){
    $sql="UPDATE ".$table." SET 
    consolidator        =   '".$_POST['consolidator']."', 
    no_container        =   '".$_POST['no_container']."', 
    kondisi_container   =   '".$_POST['kondisi_container']."',
    no_segel            =   '".$_POST['no_segel']."',
    no_mbl              =   '".$_POST['no_mbl']."',
    no_order            =   '".$_POST['no_order']."',
    tanggal             =   '".$_POST['tanggal']."',
    kapal               =   '".$_POST['kapal']."',
    voy                 =   '".$_POST['voy']."',
    tgl_tiba            =   '".$_POST['tgl_tiba']."'
    WHERE id = '".$_POST['id']."'
    ";
    // print_r($sql);exit;
    $query = mysqli_query($conn, $sql);
    $_SESSION['flash']['class']='alert alert-success';
    $_SESSION['flash']['label']='Pengubahan '.$_GET['module'].' Berhasil';
    $_SESSION['flash']['icon']='fa fa-edit';
    header('Location: ../../media.php?module='.$module);


}else if($act == 'delete'){
    $query = mysqli_query($conn, "DELETE FROM ".$table." WHERE id = '".$_GET['id']."'");
    $_SESSION['flash']['class']='alert alert-danger';
    $_SESSION['flash']['label']='Penghapusan '.$_GET['module'].' Berhasil';
    $_SESSION['flash']['icon']='fa fa-trash';
    header('Location: ../../media.php?module='.$module);
}
?>