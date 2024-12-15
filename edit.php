<?php
		include('koneksi.php');
        
        $id                     = $_POST['id'];
		$nama                   = $_POST['nama'];  
        $minuman                = $_POST['minuman'];
        $snack                  = $_POST['snack'];  
        $jmlhpesanan            = $_POST['jmlhpesanan'];
        $hargaminuman           = $_POST['hargaminuman'];
        $hargasnack             = $_POST['hargasnack'];
        $total                  = $_POST['total'];



		$input = mysqli_query($koneksi,"UPDATE pesanan SET nama='$nama', minuman ='$minuman', snack='$snack', jumlah_pesanan='$jmlhpesanan',
        harga_minuman='$hargaminuman', harga_snack='$hargasnack', total='$total' where id ='$id'") or die(mysqli_connect_error());

		if($input){
			echo "<script>alert('Data berhasil Diupdate!'); window.location='data.php';</script>";
		}
		else{
			"<script>alert('Data gagal diupdate!');</script>";
		}
?>