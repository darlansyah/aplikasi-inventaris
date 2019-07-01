<?php
session_start();
if (!isset($_SESSION['on'])) {
    header("location:../login/login.php");
}
require '../../../functions/functions.php';
$tampil = tampil("SELECT inventaris.*, katagori.katagori as nama_katagori FROM `inventaris` INNER JOIN katagori ON inventaris.id_katagori = katagori.id_katagori"); // penulisan query
//var_dump($tampil); die;
$total = 0;
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
        <title>Daftar Inventaris</title>
        <link rel="stylesheet" href="../../style/style.css">
    </head>
    <body>
        <?php
        require '../header/header.php';
        ?>
     
        <a class="aksi"  href="tambah.php">+ Tambah</a>
        <div class="data">
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
                foreach ($tampil as $row){ // menamanggil isi array
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
                    <td><a class="aksi" href="ubah.php?kode=<?= $row['id_barang']; ?>">Ubah</a> ||
                        <a class="aksi" onclick="return confirm('Yakin Ingin Menghapus <?=$row['nama_barang'];?> ?')" href="hapus.php?kode=<?= $row['id_barang']; ?>">Hapus</a></td>
                </tr>
                <?php
                } // akhir manampilkan array
                ?>
                
            </table>
        </div>
        <?php
        echo "Total Inventaris = ".$total;
        ?>
            
    </body>
</html>
