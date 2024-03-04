<?php
require 'function.php';
require 'cek.php';

//mendapatkan id barang di index.php
$idbarang = $_GET['id']; //get id barang
//informasi detail barang berdasarkan database
$get = mysqli_query($conn, "select *from stock where idbarang='$idbarang'");
$fetch = mysqli_fetch_assoc($get);
//set variabel
$namabarang = $fetch['namabarang'];
$deskripsi = $fetch['deskripsi'];
$stock = $fetch['stock'];

//cek gambar
$gambar = $fetch['image']; //ambil gambar
if($gambar==null){ //ambil gambar
    $img = 'Tidak Ada Foto';
} else{
    $img = '<img class="card-img-top" src="images/'.$gambar.'" alt="Card image" style="width:100%">';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Menampilan Barang</title>
</head>
<body>
    

<div class="container">
  <h3>Detail Barang</h3>
  <div class="card" style="width:400px">
    <?=$img;?>
    <div class="card-body">
      <h4 class="card-title"><?=$namabarang;?></h4>
      <p class="card-text"><?=$deskripsi;?></p>
      <p class="card-text"><?=$stock;?></p>
    </div>
  </div>
  <br>



</body>
</html>