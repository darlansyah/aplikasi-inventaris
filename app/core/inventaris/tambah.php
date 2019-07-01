<?php
require '../../../functions/functions.php';

$katagori = tampil("SELECT * FROM katagori");


if (isset($_POST['tambah'])) {
   
    if (tambahInventaris($_POST) >0 ) {
      
        
         echo "<script>  
         alert('Data Berasil ditambahkan');
         document.location.href = 'inventaris.php';
        </script>
        ";
    }
    else{
        echo "<script>  
         alert('Data Gagal ditambahkan!');
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
        <title>Tambah Data Inventaris</title>
        <link rel="stylesheet" href="../../style/style.css">
    </head>
    <body>
        <?php
        require '../header/header.php';
        ?>
        <div class="kotak-input">
            <p class="judul">Tambah Data Inventaris</p>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td>Nama Barang</td>
                        <td><input type="text" name="nama_barang" placeholder="Nama Barang" required></td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td><input type="number" name="jumlah" placeholder="Jumlah" required></td>
                    </tr>
                    <tr>
                        <td>Satuan</td>
                        <td><input type="text" name="satuan" placeholder="Satuan" required></td>
                    </tr>
                    <tr>
                        <td>Tanggal Datang</td>
                        <td><input type="date" name="tanggal" required></td>
                    </tr>
                    <tr>
                        <td>Katagori</td>
                    <td><select name="katagori">
                            
                            <?php
                                    foreach ($katagori as $kat){
                                        ?>
                                     <option value="<?= $kat['id_katagori'];?>"> <?= $kat['katagori']; ?></option>   
                            <?php
                                    }
                            
                            ?>
                            
                            
                         </select>
                    </td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td> 
                            <input type="radio" name="status" value="Bagus" checked=checked required/> Bagus 
                            <input type="radio" name="status" value="Perawatan" required/> Perawatan
                            <input type="radio" name="status" value="Rusak" required/> Rusak
                        </td>
                    </tr>
                    <tr>
                        <td>Harga Satuan</td>
                        <td><input type="number" name="harga" placeholder="Harga Satuan"></td>
                    </tr>
                </table>
                <div class="tengah">
                    <button class=" aksi" type="submit" name="tambah"> Simpan </button>
                    <button class=" aksi" type="submit" name="batal"> Batal </button>
                </div>
            </form>
        </div> 
    </body>
</html>
