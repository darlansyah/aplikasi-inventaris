<?php
session_start();
if (!isset($_SESSION['on'])) {
    header("location:../login/login.php");
}
require '../../../functions/functions.php';
$tampil = tampil("SELECT inventaris.*, katagori.katagori as nama_katagori FROM inventaris INNER JOIN katagori ON inventaris.id_katagori = katagori.id_katagori WHERE inventaris.id_katagori = 2");
$total = 0;
//var_dump($tampil);
//die;
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Daftar Inventaris Kendaraan</title>
        <link rel="stylesheet" href="../../style/style.css">
    </head>
    <body>
        <?php
        require '../header/header.php';
        ?>
        <h3>Daftar Inventaris Kendaraan</h3>
        <a class="aksi"  href="../inventaris/tambah.php">+ Tambah</a>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Satuan</th>
                <th>Tanggal Datang</th>
                <th>Katagori</th>
                <th>Status</th>
                <th>Harga Satuan</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>
            <?php
            $no = 1;
            foreach ($tampil as $row){
                $jumlah = $row['jumlah']* $row['harga'];
            $total = $total + $jumlah;
                ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nama_barang']; ?></td>
                <td><?= $row['jumlah']; ?></td>
                <td><?= $row['satuan']; ?></td>
                <td><?= $row['tgl_datang']; ?></td>
                <td><?= $row['nama_katagori']; ?></td>
                <td><?= $row['status_barang']; ?></td>
                <td><?= $row['harga']; ?></td>
                <td><?= $row['jumlah']* $row['harga'];?></td>
                <td><a class="aksi" href="../inventaris/ubah.php?kode=<?= $row['id_barang']; ?>">Ubah</a> ||
                    <a class="aksi" onclick="return confirm('Yakin Ingin Menghapus <?=$row['nama_barang'];?> ?')" href="../inventaris/hapus.php?kode=<?= $row['id_barang']; ?>">Hapus</a></td>
            </tr>
            <?php
            }
            ?>
        </table>
        <?php
        echo "Total Inventaris = ".$total;
        ?>
    </body>
</html>
