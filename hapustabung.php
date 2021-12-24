<?php
    include "koneksi.php";
    if (isset($_GET['id_tabung'])) {
        $id_tabung    =$_GET['id_tabung'];
    }
    else{
        echo "Oops! No ID Selected";
    }
    
    if (!empty($id_tabung) && $id_tabung != "") {
        $hapus =mysqli_query($koneksi, "DELETE FROM tb_tabung WHERE id_tabung='$id_tabung'");
            ?>
                <script language="JavaScript">
                alert('Good! Delete data  berhasil ...');
                document.location='datatabung.php';
                </script>
            <?php        
    }
?>