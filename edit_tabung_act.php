<?php
 include "koneksi.php";
 $id_tabung = $_GET['id_tabung'];
 $kode_tabung = $_GET['kode_tabung'];
 $ukuran = $_GET['ukuran'];
 $harga = $_GET['harga'];
 $berat = $_GET['berat'];
 $query = "UPDATE tb_tabung SET kode_tabung='$kode_tabung', ukuran='$ukuran', harga='$harga', berat='$berat'   WHERE id_tabung='$id_tabung'";
 $result = mysqli_query($koneksi, $query);
 //echo $nama;
 if($result)
 {
  header('location:datatabung.php');
 }
 else
 {
  echo "data tidak berhasil diedit, error : " . mysqli_error($koneksi);
 }
?>