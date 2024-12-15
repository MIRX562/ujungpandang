<?php 
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "ujungpandang";


$koneksi    = mysqli_connect($host,$user,$pass,$db);


// membuat array supaya lebih rapi
function query($query){
  //global digunkaan untuk memanggil function yang sama karna variabel yang ada didalam function itu berbeda dengan yang ada diluar makanya kita menggunakan "global"
  global $koneksi;
  $result = mysqli_query($koneksi, $query);
  $rows = [];
  // fetch assoc itu digunakan untuk menampilkan array berdasarkan field dan while untuk melakukan pengulangan pada array
  while( $row = mysqli_fetch_assoc($result) ) {
    $rows[]=$row;
  }  
  return $rows;
}

function hapus($id){
  global $koneksi;
  mysqli_query($koneksi, "DELETE FROM pesanan WHERE id = $id");

  return mysqli_affected_rows($koneksi);
}
?>
