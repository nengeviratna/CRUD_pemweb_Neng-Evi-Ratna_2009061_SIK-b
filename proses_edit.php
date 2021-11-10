<?php

    include("koneksi.php");

    $id_identity = $_POST['id_identity'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];
    $email = $_POST['email'];
    $id_user = $_POST['id_user'];

    $query = "update identity set nama = '$nama', tgl_lahir = '$tgl_lahir', alamat = '$alamat', no_telepon = '$no_telepon', email = '$email', id_user = '$id_user' where id_identity = $id_identity";

    if(mysqli_query($koneksi, $query)){
        header("Location: index.php");
    } else{
        header("Location: edit.php?id_identity=$id_identity");
    }
?>