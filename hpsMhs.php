<?php
    //memanggil file pustaka fungsi
    require "fungsi.php";

    $kode = decrypturl($_GET["kode"]);

    $q = "SELECT * FROM mhs WHERE id = '".$kode."'";
    
    $rs = mysqli_query($koneksi, $q);
    if(mysqli_num_rows($rs) == 1){
        mysqli_query($koneksi, "DELETE FROM mhs WHERE id = '$kode'");
        header("location:updateMhs.php");
    } else{
        echo "<script>
            alert('ID Mahasiswa tidak ditemukan')
            javascript:history.go(-1)
            </script>";
        
    }
?>