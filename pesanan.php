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
        <form method="post" action="simpan.php">
            <div class="pertama">
            
                <div class="input-pertama">
    <span class="details">Nama </span> <br>
    <input type="text" name="nama" placeholder="Silahkan Masukan Nama Anda Disini">
    </div>

    <div class="input-pertama">
        <span class="details">Coffee and Non-Coffee</span><br>
        <select type="hidden" name="minuman" id="minuman">
            <option value="kosong">Mau Minum Apa Ges?</option>
            <option value="Espresso">Espresso</option>
            <option value="Americano">Americano</option>
            <option value="Coffee Latte">Coffee Latte</option>
            <option value="Vanilla Latte">Vanilla Latte</option>
            <option value="Sangir">Sangir</option>
            <option value="Matcha Latte">Matcha Latte</option>
            <option value="Choco">Choco</option>
            <option value="Matcha">Matcha</option>
            <option value="Lemon Tea">Lemon Tea</option>
            <option value="Thai Tea">Thai Tea</option>

        </select><br>
        <span class="details">Snack</span><br>
        <select name="snack" id="snack">
            <option value="kosong">Mau Pake Snack?</option>
            <option value="Kentang Goreng">Kentang Goreng</option>
            <option value="Nugget Goreng">Nugget Goreng</option>
            <option value="Snack Pack">Snack Pack</option>
        </select>
    </div>

    <div class="input-pertama">
        <span class="details">Jumlah Pesanan </span><br>
        <input type="number" name="jmlhpesanan" id="jml" min="1" max="100" placeholder="1">
    </div>

    <div class="kedua">
        <div class="input-kedua">
            <span class="details">Harga Minuman </span><br>
            <input type="text" name="hargaminuman" id="hg1" placeholder="Rp." >
        </div>
        
        <div class="input-kedua">
            <span class="details">Harga Snack </span><br>
            <input type="text" name="hargasnack" id="hg2" placeholder="Rp." >
        </div>
        
        <div class="input-kedua">
            <span class="details" for="total">Total </span> <br>
            <input type="text" name="total" id="total" placeholder="Rp." >
        </div>
    </div>

            <button type="submit" value="simpan" class="btn">Order</button>

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
  kosong:0,
  Espresso: 10000,
  Americano: 12000,
  'Coffee Latte': 15000,
  'Vanilla Latte': 16000,
  Sangir: 18000,
  'Matcha Latte': 16000,
  Choco: 16000,
  Matcha: 13000,
  'Lemon Tea': 15000,
  'Thai Tea': 12000,
};

const daftarHargaSnack = {
  'kosong':0,
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