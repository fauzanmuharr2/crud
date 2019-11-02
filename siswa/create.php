<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<fieldset>
<legend>Input Data Siswa</legend>
    <form action="/siswa/proses.php?aksi=tambah" method="post">
        <table>
            <tr>
            <th>Nomor induk siswa</th>
            <td><input type="number" name="nis" required></td>
            </tr>
            <tr>
            <th>Nama siswa</th>
            <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
            <th>Alamat</th>
            <td><textarea name="alamat" cols="40" required></textarea>
            </tr>
            <tr>
            <th><input type="submit" name="save" value="Simpan"></th>
            </tr>
        </table>
    </form>
</fieldset>
</body>
</html>