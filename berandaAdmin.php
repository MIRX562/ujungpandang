<?php
include('koneksi.php');
include ('navbaradmin.php');

 //ambil data total -->

$get1 = mysqli_query($koneksi, "select * from pesanan");
$count1 = mysqli_num_rows($get1);

$get2 = mysqli_query($koneksi, "select * from pesanan where minuman > '0'");
$count2 =mysqli_num_rows($get2);

$get3 = mysqli_query($koneksi, "select * from pesanan where snack > '0'");
$count3 =mysqli_num_rows($get3);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rumah Tahfiz</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  </head>
  
  <body>
    <div class="title">
      <h1>Selamat Datang Di Halaman Admin</h1>
    </div>
        <div class="container">
          <div class="pertama">
            <div class="card1">
              <div class="body-card">
              <div class="hitung">
               <?=$count1;?></div>
                <h1>Total Pesanan Masuk </h1>
              </div>
            </div>
          </div>

          <div class="kedua">
            <div class="card2">
              <div class="body-card">
              <div class="hitung">
              <?=$count2;?>
              </div><h1>Minuman</h1>
              </div>
            </div>
          </div>
          
          <div class="ketiga">
            <div class="card3">
              <div class="body-card">
              <div class="hitung">
              <?=$count3;?>
              </div>
              <h1>Snack</h1>
              </div>
            </div>
          </div>    
          </div>
        </div>
        <div class="gambar">
          <img src="gambar/Holiday_Spiced_Café_Au_Lait_-_The_Local_Palate-removebg-preview.png" width="350"alt="">
        </div>
    </body>
</html>
