<?php
    //memanggil file pustaka fungsi
    require "fungsi.php";

    $kode = decrypturl($_GET["kode"]);

    $q = "SELECT * FROM matkul WHERE idmatkul = '".$kode."'";

    $rs = mysqli_query($koneksi, $q);
    if(mysqli_num_rows($rs) == 1){
        mysqli_query($koneksi, "DELETE FROM matkul WHERE idmatkul = '$kode'");
        header("location:updateMatkul.php");
    } else{
        echo "<script>
            alert('ID MATKUL tidak ditemukan')
            javascript:history.go(-1)
            </script>";
        
    }
?>