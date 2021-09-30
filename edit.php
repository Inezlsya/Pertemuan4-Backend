<?php
    include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar CRUD</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Edit Data Transaksi
            </div>
            <div class="card-body">
                <form action="" method="POST" class="form-item">

                    <div class="form-group">
                        <label for="nama">Waktu pemesanan</label>
                        <input type="date" name="waktu_pemesanan" class="form-control col-md-9" placeholder="Masukkan Waktu">
                    </div>

                    <div class="form-group">
                        <label for="telp">Nama pemesan</label>
                        <input type="text" name="nama_pemesan" class="form-control col-md-9" placeholder="Masukkan Nama">
                    </div>

                    <div class="form-group">
                        <label for="alamat">No Meja</label>
                        <input type="number" name="alamat" class="form-control col-md-9" placeholder="Masukkan no_meja">
                    </div>

                    <div class="form-group">
                        <label for="kota">Subtotal</label>
                        <input type="text" name="subtotal" class="form-control col-md-9" placeholder="Masukkan Subtotal">
                    </div>

                    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
                    <button type="reset" class="btn btn-danger">BATAL</button>
                </form>

            </div>
        </div>
    </div>


</body>
</html>

<?php
        if(isset($_POST['simpan']))
        {
        	
            $waktu_pemesanan       = $_POST['waktu_pemesanan'];
            $nama_pemesan       = $_POST['nama_pemesan'];
            $no_meja            = $_POST['no_meja'];
            $subtotal             = $_POST['subtotal'];

            mysqli_query($koneksi, "UPDATE transaksi 
            SET waktu_pemesanan='$waktu_pemesanan', nama_pemesan='$nama_pemesan', no_meja='$no_meja', subtotal='$subtotal'
            WHERE id_pemesanan='$id_pemesanan'") or die(mysqli_error($koneksi));

            echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang DiUpdate.... </h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/crudrestoran/transaksi.php'>";
        }
?>