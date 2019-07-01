<?php
session_start();
if (!isset($_SESSION['on'])) {
    header("location:../login/login.php");
}
//echo  $_SESSION['nama'];
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
        <title>Beranda</title>
         <link rel="stylesheet" href="../../style/style.css">
    </head>
     <?php
        require '../header/header.php';
        ?>
    <body>
        <div class="tengah">
            <h1>Selamat Datang</h1>
            <h1><?=  $_SESSION['nama'];?></h1>
        </div>
    </body>
</html>
