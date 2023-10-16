<?php
    //memanggil file pustaka fungsi
    require "fungsi.php";

    $kode = decrypturl($_GET["kode"]);

    $q = "SELECT * FROM kultawar WHERE idkultawar = '".$kode."'";
    
    $rs = mysqli_query($koneksi, $q);
    if(mysqli_num_rows($rs) == 1){
        mysqli_query($koneksi, "DELETE FROM kultawar WHERE idkultawar = '$kode'");
        header("location:updateTawar.php");
    } else{
        echo "<script>
            alert('ID Kulktawar tidak ditemukan')
            javascript:history.go(-1)
            </script>";
        
    }
?>