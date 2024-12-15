<?php
include('koneksi.php');

//arrayy 
$minuman= array('Pilih','Espresso','Americano','Coffe Latte','Vanilla Latte','Sangir','Matcha Latte','Choco','Matcha','Lemon Tea','Thai Tea');
$snack= array('Pilih','Kentang Goreng','Nugget Goreng','Snack Pack');

$sqledit = mysqli_query($koneksi, "SELECT * FROM pesanan WHERE id = '$_GET[id]'");
$e = mysqli_fetch_array($sqledit);
?>



<!DOCTYPE html>
<html>
<head>
    <title>Ujung Pandang</title>
    <link rel="stylesheet" href="css/pesanan.css">
</head>
<body>
    <div class="forminput">
        <div class="title"><center>Order Menu</center></div>

        <div class="isi">
        <form method="post" action="edit.php">
            <input type="hidden" value="<?php echo $e['id'];?>" name="id">

            <div class="pertama">
            
                <div class="input-pertama">
    <span class="details">Nama </span> <br>
    <input type="text" name="nama" value="<?php echo $e['nama'];?>">
    </div>

    <div class="input-pertama">
        <span class="details">Coffee and Non-Coffee</span><br>
        <select name="minuman" id="minuman">
        <?php
                    foreach ($minuman as $m){
                    echo "<option value ='$m'";
                    echo $e['minuman']==$m?'selected="selected"':'';
                    echo ">$m</option>";
                }
            ?>
        </select><br>
        <span class="details">Snack</span><br>
        <select name="snack" id="snack">
        <?php
                    foreach ($snack as $s){
                    echo "<option value ='$s'";
                    echo $e['snack']==$s?'selected="selected"':'';
                    echo ">$s</option>";
                }
            ?>
        </select>
    </div>

    <div class="input-pertama">
        <span class="details">Jumlah Pesanan </span><br>
        <input type="number" name="jmlhpesanan" id="jml" min="1" max="10" placeholder="0"  value="<?php echo $e ['jumlah_pesanan'];?>">
    </div>

    <div class="kedua">
        <div class="input-kedua">
            <span class="details">Harga Minuman </span><br>
            <input type="text" name="hargaminuman" id="hg1" placeholder="Rp."  value="<?php echo $e ['harga_minuman'];?>">
        </div>
        
        <div class="input-kedua">
            <span class="details">Harga Snack </span><br>
            <input type="text" name="hargasnack" id="hg2" placeholder="Rp."value="<?php echo $e ['harga_snack'];?>">
        </div>
        
        <div class="input-kedua">
            <span class="details" for="total">Total </span> <br>
            <input type="text" name="total" id="total" placeholder="Rp."value="<?php echo $e ['total'];?>">
        </div>
    </div>
            <button type="submit" class="btn">Ubah</button>

            </div>
        </form>
        </div>
    </div>
    <script>
        // Mendapatkan elemen-elemen HTML yang diperlukan
const minumanSelect = document.getElementById('minuman');
const snackSelect = document.getElementById('snack');
const jmlhPesananInput = document.getElementById('jml');
const hargaMinumanInput = document.getElementById('hg1');
const hargaSnackInput = document.getElementById('hg2');
const totalInput = document.getElementById('total');

// Mendefinisikan daftar harga minuman dan snack
const daftarHargaMinuman = {
  Pilih:0,
  Espresso: 10000,
  Americano: 12000,
  'Coffee Latte': 15000,
  'Vanilla Latte': 16000,
  Sangir: 18000,
  'Matcha Latte': 16000,
  Choco: 12000,
  Matcha: 13000,
  'Lemon Tea': 8000,
  'Thai Tea': 9000,
};

const daftarHargaSnack = {
  'Pilih':0,
  'Kentang Goreng': 8000,
  'Nugget Goreng': 10000,
  'Snack Pack': 12000,
};

// Event listener untuk menghitung harga otomatis
function hitungHargaOtomatis() {
  const minuman = minumanSelect.value;
  const snack = snackSelect.value;
  const jmlhPesanan = jmlhPesananInput.value;

  const hargaMinuman = daftarHargaMinuman[minuman] || 0;
  const hargaSnack = daftarHargaSnack[snack] || 0;

  const totalHarga = hargaMinuman * jmlhPesanan + hargaSnack;

  hargaMinumanInput.value = 'Rp. ' + hargaMinuman.toLocaleString();
  hargaSnackInput.value = 'Rp. ' + hargaSnack.toLocaleString();
  totalInput.value = 'Rp. ' + totalHarga.toLocaleString();
}

// Event listener saat ada perubahan pada input atau select
minumanSelect.addEventListener('change', hitungHargaOtomatis);
snackSelect.addEventListener('change', hitungHargaOtomatis);
jmlhPesananInput.addEventListener('input', hitungHargaOtomatis);

// Memanggil fungsi hitungHargaOtomatis saat halaman dimuat
hitungHargaOtomatis();

    </script>
</body>
</html>