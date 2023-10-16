<?php
//membuat koneksi ke database mysql
$koneksi=mysqli_connect('localhost','root','','pwlgenap2019-akademik');


function encryptid($id)
{
    $enc = base64_encode(rand() * strtotime(date("H:i:s"))."-".$id);
    return $enc;
}

function decrypturl($string)
{
    $kode = base64_decode($string);
    $id = explode("-",$kode);
    if(count($id) > 1)
    {
        return $id[1];
    }
    else
    {
        return 0;
    }
}

function search($tipe,$key=null)
{
    $sql="select * from " .$tipe;
    if(is_null($key))
    {
        $sql.="where".$key;
    }

    $hasil=mysqli_query($GLOBALS['koneksi'],$sql) or die
    (mysqli_error($GLOBALS['koneksi']));
    return $hasil;
}
?>
