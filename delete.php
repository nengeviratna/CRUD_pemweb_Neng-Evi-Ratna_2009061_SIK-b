<?php
    include("koneksi.php");

    $id_identity = $_GET['id_identity'];

    $query = "delete from identity where id_identity = $id_identity";

    if(mysqli_query($koneksi, $query)){
        header("Location: index.php");
    }else{
        header("Location: edit.php?id_identity=$id_identity");
    }

?>