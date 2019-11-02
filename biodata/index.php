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
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Tanggal Lahir</th>
            <th>Umur</th>
            <th colspan="3">Aksi</th>
            </tr>
        <?php
            include '../database.php';
            $biodata = new Biodata();
            $no = 1;
        foreach ($biodata->index() as $data) {
        ?>
            <td><?php echo $no++;?></td>
            <td><?php echo $data['nama'];?></td>
            <td><?php echo $data['alamat'];?></td>   
            <td><?php echo $data['jenis_kelamin'];?></td>
            <td><?php echo $data['agama'];?></td>
            <td><?php echo $data['tgl_lahir'];?></td>
            <td><?php echo $data['umur'];?></td>
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