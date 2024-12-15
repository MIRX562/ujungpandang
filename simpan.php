<?php
include('koneksi.php');

$nama                   = $_POST['nama'];  
$minuman                = $_POST['minuman'];
$snack                  = $_POST['snack'];  
$jmlhpesanan            = $_POST['jmlhpesanan'];
$hargaminuman           = $_POST['hargaminuman'];
$hargasnack             = $_POST['hargasnack'];
$total                  = $_POST['total'];

if($nama=="")
    {
        echo "<script>alert('Nama Belum Diisi');history.go(-1);</script>";
    }
else{

    $pilih="SELECT * from pesanan where nama='$nama'";
    $cek= mysqli_query($koneksi, $pilih);

    $jumlah_data = mysqli_num_rows($cek);
    if ($jumlah_data >=1)
    {
        echo "<script>alert('Pesanan yang sama sudah dibuat');history.go(-1);</script>";
    }
    else{
        $query="INSERT INTO pesanan SET nama='$nama', minuman ='$minuman', snack='$snack', jumlah_pesanan='$jmlhpesanan',
         harga_minuman='$hargaminuman', harga_snack='$hargasnack', total='$total'";
mysqli_query($koneksi, $query);

        echo "<script>alert('Data yang Anda Input Sukses');window.location= 'berandauser.php'</script>";
    }
}



?>