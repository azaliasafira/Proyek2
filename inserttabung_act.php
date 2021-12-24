<?php
    include "koneksi.php";
    $kode_tabung   =$_GET['kode_tabung'];
    $ukuran     =$_GET['ukuran'];
    $harga          =$_GET['harga'];
    $berat      =$_GET['berat'];
    $foto           =$_GET['foto'];
    
    $ceknis    =mysqli_num_rows (mysqli_query($koneksi, "SELECT kode_tabung FROM tb_tabung WHERE kode_tabung='$_GET[kode_tabung]'"));
    
    if($ceknis > 0) {
    ?>
        <script language="JavaScript">
            alert('Oops! Duplikat Kode ...');
            document.location='inserttabung_act.php';
        </script>
    <?php
    }
        
    else{
        $insert =mysqli_query($koneksi, "INSERT INTO tb_tabung (kode_tabung, ukuran, harga, berat, foto) VALUES ('$kode_tabung', '$ukuran', '$harga', '$berat', '$foto')");
        ?>
            <script language="JavaScript">
            alert('Good! Input Data Berhasil  ...');
            document.location='datatabung.php';
            </script>
        <?php
        }
?>