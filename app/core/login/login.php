<?php
session_start();
if (isset($_SESSION['on'])) {
    header("location:../beranda/beranda.php");
}



require '../../../functions/functions.php';
$pesan = null;
//session_start();
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    
   $result = mysqli_query($link,"SELECT * FROM petugas WHERE username = '$user'");
   
   if (mysqli_num_rows($result)===1) {
       $row = mysqli_fetch_assoc($result);
       if ($row['password'] === "$pass") {
           $_SESSION['nama'] = $row['nama_lengkap'];
           $_SESSION['on'] = true;
           header("location:../beranda/beranda.php");
       }
       else{
           $pesan = "password salah!";
       }
       
   }
   else{
       $pesan = "userneme salah!";
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
        <title>Login</title>
        <link rel="stylesheet" href="../../style/style.css">
    </head>
    <body>
        <div class="container">
            <h2>INVENTARIS KANTOR</h2>
            <div class="kotak-login">
                    <form action="" method="POST">
                        <table>
                            <tr>
                                <td><input type="text" name="username" placeholder="Username" required/></td>
                            </tr>
                            <tr>
                                <td><input type="password" name="password" placeholder="Password" required/></td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="submit" name="login">Login</button>
                                </td>
                            </tr>
                        </table>
                        <p class="pesan"> <?= $pesan ?> </p>
                    </form>
            </div>
        </div>
    </body>
</html>
