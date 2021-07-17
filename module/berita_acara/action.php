<?php 
include '../../config/koneksi.php';
include '../../config/upload.php';
$user   = $_SESSION['id_user'];
$now    = date('Y-m-d H:i:s');
$table  = 'berita_acara';
$module = $_GET['module'];
$act    = $_GET['act'];
if($act == 'create'){
    $sql="INSERT INTO ".$table." (tanggal,no_container,nama_kapal,tgl_datang,konsolidator,importir,no_bl,jumlah,jenis_barang,weight,kubikasi,keterangan)
    VALUES ('".$_POST['tanggal']."', '".$_POST['no_container']."', '".$_POST['nama_kapal']."','".$_POST['tgl_datang']."','".$_POST['konsolidator']."','".$_POST['importir']."','".$_POST['no_bl']."','".$_POST['jumlah']."','".$_POST['jenis_barang']."','".$_POST['weight']."','".$_POST['kubikasi']."','".$_POST['keterangan']."')";
    $query = mysqli_query($conn,$sql);
    $_SESSION['flash']['class']='alert alert-success';
    $_SESSION['flash']['label']='Penambahan '.$_GET['module'].' Berhasil';
    $_SESSION['flash']['icon']='fa fa-check';
    header('Location: ../../media.php?module='.$module);
}else if($act == 'edit'){
    $sql="UPDATE ".$table." SET 
    tanggal             = '".$_POST['tanggal']."', 
    no_container        = '".$_POST['no_container']."', 
    nama_kapal          = '".$_POST['nama_kapal']."',
    tgl_datang          = '".$_POST['tgl_datang']."',
    konsolidator        = '".$_POST['konsolidator']."',
    importir            = '".$_POST['importir']."',
    no_bl               = '".$_POST['no_bl']."',
    jumlah              = '".$_POST['jumlah']."',
    jenis_barang        = '".$_POST['jenis_barang']."',
    weight              = '".$_POST['weight']."',
    kubikasi            = '".$_POST['kubikasi']."',
    keterangan          = '".$_POST['keterangan']."'
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