<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center><b>Data Siswa</b></center>
        <fieldset>
                <a href="create.php"><b><center>Tambah Data Siswa</center></b></a>
            <table align="center" border="1">
            <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nomor Induk Siswa</th>
            <th>Alamat</th>
            <th colspan="3">Aksi</th>
            </tr>
        <?php
            include '../database.php';
            $siswa = new Siswa();
            $no = 1;
        foreach ($siswa->index() as $data) {
        ?>
            <td><?php echo $no++;?></td>
            <td><?php echo $data['nama'];?></td>
            <td><?php echo $data['nis'];?></td>   
            <td><?php echo $data['alamat'];?></td>
            <td>
                <a href="show.php?id=<?php echo $data['id'];?>">Show</a>
            </td>
            <td>
                <a href="edit.php?id=<?php echo $data['id'];?>">Edit</a>
             </td>
             <td>
                <a href="proses.php?id=<?php echo $data['id'];?>&aksi=delete" 
                onclick="return confirm('Apakah anda yakin mau menghapus data ini? ')">
                Delete
            </td>
        </tr>
     <?php
    }
     ?>
    </table>
    </fieldset>
</body>
</html>