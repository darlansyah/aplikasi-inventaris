<?php
require '../../../functions/functions.php';
$kode = $_GET['kode'];

if (hapusInventasi($kode) > 0) {
     //echo "hapus berasil";
     echo "<script>  
         alert('Data Berasil dihapus!');
         document.location.href = 'inventaris.php';
        </script>
        ";
}
else{
    // echo "gagal hapus";
   echo "<script>  
         alert('Data gagal dihapus!');
         document.location.href = 'inventaris.php';
        </script>
        "; 
}

?>