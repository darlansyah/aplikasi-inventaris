<?php
require '../../../functions/functions.php';

$kode = $_GET['kode'];
    
$row = tampil("SELECT *FROM inventaris WHERE id_barang = '$kode'")[0];
$katagori = tampil("SELECT * FROM katagori");



if (isset($_POST['ubah'])) {
    if (ubahInventaris($_POST,$kode) > 0) {
       // echo "sukses";
         echo "<script>  
         alert('Data Berasil diubah');
         document.location.href = 'inventaris.php';
        </script>
        ";
    }
    else{
       // echo "gagal";
         echo "<script>  
         alert('Data Berasil diubah');
         document.location.href = 'inventaris.php';
        </script>
        ";
    }
}
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
        <title>Ubah Data Inventoris</title>
        <link rel="stylesheet" href="../../style/style.css">
    </head>
    <body>
        <?php
        require '../header/header.php';
        ?>
        <div class="kotak-input">
                <p  class="judul">Ubah Data Inventaris</p>
               <form action="" method="POST">
                   <table>
                     
                       <tr>
                           <td>Nama Barang</td>
                           <td><input type="text" name="nama_barang" placeholder="Nama Barang" value="<?= $row['nama_barang']; ?>"></td>
                       </tr>
                       <tr>
                           <td>Jumlah</td>
                           <td><input type="number" name="jumlah" placeholder="Jumlah" value="<?= $row['jumlah']; ?>"></td>
                       </tr>
                       <tr>
                           <td>Satuan</td>
                           <td><input type="text" name="satuan" placeholder="Satuan" value="<?= $row['satuan']; ?>"></td>
                       </tr>
                       <tr>
                           <td>Tanggal Datang</td>
                           <td><input type="date" name="tanggal" value="<?= $row['tgl_datang']; ?>"></td>
                       </tr>
                       <tr>
                           <td>Katagori</td>
                       <td><select name="katagori">
                                                    <?php 
                                                    foreach ($katagori as $kat) :
                                                    ?>
                                                    <option value="<?= $kat['id_katagori'] ;?>"
                                                            <?php
                                                            if ($kat['id_katagori'] == $row['id_katagori']){
                                                                echo "selected";
                                                            }
                                                            ?>  
                                                            >  <?= $kat['katagori'] ;?></option>
                                                    <?php
                                                    endforeach;
                                                 ?>
                            </select>
                       </td>
                       </tr>
                       <tr>
                           <td>Status</td>
                           <td> 
                               <input type="radio" name="status" value="Bagus" <?php if ($row['status_barang'] == "Bagus") {echo "checked"; } ?>/> Bagus 
                               <input type="radio" name="status" value="Perawatan" <?php if ($row['status_barang'] == "Perawatan") {echo "checked"; } ?> /> Perawatan
                               <input type="radio" name="status" value="Rusak" <?php if ($row['status_barang'] == "Rusak") {echo "checked"; } ?> /> Rusak
                           </td>
                       </tr>
                       <tr>
                           <td>Harga Satuan</td>
                           <td><input type="number" name="harga" placeholder="Harga Satuan" value="<?= $row['harga']; ?>"></td>
                       </tr>
                   </table>
                   <div class="tengah">
                       <button class="aksi" type="submit" name="ubah"> Ubah </button> 
                       <button class="aksi" type="submit" name="batal"> Batal </button>
                   </div>
               </form>
        </div>
    </body>
</html>
