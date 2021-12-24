<?php
 include "koneksi.php";
 $id_makanan = $_GET['id_makanan'];
 $kode_makanan = $_GET['kode_makanan'];
 $nama_paket = $_GET['nama_paket'];
 $harga = $_GET['harga'];
 $deskripsi = $_GET['deskripsi'];
 $query = "UPDATE tb_makanan SET kode_makanan='$kode_makanan', nama_paket='$nama_paket', harga='$harga', deskripsi='$deskripsi'   WHERE id_makanan='$id_makanan'";
 $result = mysqli_query($koneksi, $query);
 //echo $nama;
 if($result)
 {
  header('location:datamakanan.php');
 }
 else
 {
  echo "data tidak berhasil diedit, error : " . mysqli_error($koneksi);
 }
?>