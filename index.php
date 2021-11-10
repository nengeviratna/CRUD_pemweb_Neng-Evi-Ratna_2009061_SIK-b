<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>

</head>

<body>
<?php
    include ("koneksi.php");

    $query = "select * from identity";
    $hasil = mysqli_query($koneksi, $query);
?>
    <h1>Form Pendataan Nelayan</h1>
    <br>
    <form action="proses_insert.php" method="POST">
    <form action="proses_edit.php" method="POST">
        ID  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  : <input type="text" name="id_identity" value=""><br/><br/>
        Nama &nbsp; &nbsp;  : <input type="text" name="nama" value=""><br/><br/>
        Tanggal Lahir : <input type="text" name="tgl_lahir" value=""><br/><br/>
        Alamat  &nbsp; &nbsp; &nbsp; : <textarea name="alamat" value=""></textarea><br/><br/>
        No. Telepon : &nbsp; <input type="text" name="no_telepon" value=""><br/><br/>
        Email    &nbsp; &nbsp; &nbsp; &nbsp; : <input type="text" name="email" value=""><br/><br/>
        ID User  &nbsp; &nbsp; : <input type="text" name="id_user" value=""><br/><br/>
        <input type="submit" value="simpan">
    </form>
    <br>
    <br>
    <br>

    <h1>Data Nelayan  </h1>
    <table border="2">
        <tr>
            <th> ID </th>
            <th> Nama </th>
            <th> Tanggal Lahir </th>
            <th> Alamat </th>
            <th> Nomor Telepon </th>
            <th> Email </th>
            <th> User </th>
            <th colspan="2"> Action </th>
        </tr>

        <?php
        while($row = mysqli_fetch_assoc($hasil)){
            echo "<tr>";
            echo "<td>".$row['id_identity']."</td>";
            echo "<td>".$row['nama']."</td>";
            echo "<td>".$row['tgl_lahir']."</td>";
            echo "<td>".$row['alamat']."</td>";
            echo "<td>".$row['no_telepon']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['id_user']."</td>";
            echo "<td><a href= 'edit.php?id_identity=".$row['id_identity']."'>edit</a></td>";
            echo "<td><a href= 'delete.php?id_identity=".$row['id_identity']."'>delete</a></td";
            echo "</tr>";
        }

        ?>
    </table>

</body>
</html>