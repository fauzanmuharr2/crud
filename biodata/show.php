<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <?php 
            include '../database.php';
            $biodata = new Biodata();
            foreach ($biodata->show($_GET['id']) as $data) {
            $id = $data['id'];
            $nama = $data['nama'];
            $alamat = $data['alamat'];
            $jenis_kelamin = $data['jenis_kelamin'];
            $agama = $data['agama'];
            $tgl_lahir = $data['tgl_lahir'];
            $umur = $data['umur'];
            }
        ?>
<fieldset>
<legend>Input Data Siswa</legend>
        <table>
            <tr>
            <th>Nama</th>
            <td><input type="text" name="nama" value="<?php echo $nama;?>" readonly></td>
            </tr>
            <tr>
            <th>Alamat</th>
            <td><textarea name="alamat" cols="40"  readonly><?php echo $alamat;?></textarea>
            </tr>
            <tr>
            <th>Jenis Kelamin</th> 
            <td>
            <input type="radio" name="jenis_kelamin" value="<?php echo $jenis_kelamin;?>" checked readonly>Laki-Laki
            <input type="radio" name="jenis_kelamin" value="<?php echo $jenis_kelamin;?>" readonly >Perempuan
            </td>
            </tr>
            <tr><th>Agama</th>
            <td><select name="agama">
            <option value="" ></option>
            <option value="Islam" value="<?php echo $agama;?>" readonly >Islam</option>
            <option value="kristen" value="<?php echo $agama;?>" readonly >Kristen</option>
            </select>
            </td>
            </tr>
            <tr>
            <th>Tanggal Lahir</th>
            <td><input type="date" name="tgl_lahir" value="<?php echo $tgl_lahir;?>" readonly></td>
            </tr>
            <tr>
            <th>Umur</th>
            <td><input type="text" name="nama" value="<?php echo $umur;?>" readonly></td>
            </tr>
        </table>
</fieldset>
</body>
</html>