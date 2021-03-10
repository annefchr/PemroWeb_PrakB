<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Malam Rabu Bersama PemroWeb</title>
</head>
</body>
    <h1>Data Mahasiswa</h1>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Umur</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $arr2[0]; ?></td>
                    <td><?= $arr2[1]; ?></td>
                    <td><?= $arr2[2]; ?></td>
                </tr>
            </tbody>
            <br>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Umur</th>
                </tr>
            </thead>
            <tbody>
                <? foreach($arr as $mhs); ?>
                    <tr>
                        <td><?php echo $mhs['nama'] ?></td>
                        <td><?php echo $mhs['nim'] ?></td>
                        <td><?php echo $mhs['usia'] ?></td>
                    </tr>
                <? endforeach; ?>
            </tbody>
        </table>
</html>