<?php
  error_reporting(0);
  include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title> Transaksi</title>
  <link rel="stylesheet" href="https://cdn.datatabels.net/1.10.19/css/jquery.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatabels.net/1.10.19/css/jquery.dataTables.min.css"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatabels.net/1.10.19/css/dataTables.bootstrap4.min.css">
</head>
<body>
  <h1 style="text-align: center;">Data Transaksi</h1>
  <center><a href="InputPegawai.php" >Tambah Data</a></center>
  <br>
  <table class="table table-striped table-border" id="data">
    <thead>
    <tr>
      <th>No</th>
      <th>Waktu Pemesanan</th>
      <th>Nama Pemesan</th>
      <th>No Meja</th>
      <th>Subtotal</th>
      <th>Aksi</th>      

    </tr>
    </thead>
    <tbody>
    <?php
      $no=0;
      $result = mysqli_query($koneksi, "SELECT * FROM transaksi ORDER BY id_pemesanan ASC");
      while($row = mysqli_fetch_array($result)) {
        $no++
     ?>
      <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $row['waktu_pemesanan'];?></td>
        <td><?php echo $row['nama_pemesan'];?></td>
        <td><?php echo $row['no_meja'];?></td>
        <td><?php echo $row['subtotal'];?></td>
         <td>
          <a href="edit.php?id=<?php echo $row['id_pemesanan'];?>">Edit</a>
        </td>
        <td>
        <class action="" method="post">
          <button type="submit" value="<?php echo $r_sudah_order['id_order'];?>" name="hapus_transaksi" class="btn btn-mini btn-danger">
           <i class='icon icon-trash'></i>
           &nbsp; Hapus</button>
           <a target='_blank' href="cetak_transaksi.php?konten=<?php echo $r_sudah_order['id_order'];?>" class="btn btn-mini btn-success">
           <i class='icon icon-print'></i>
           &nbsp; Cetak
          </a>
        </class>
      </tr>
     <?php } ?>
    </tbody>
  </table>
  <script>
    $(document).ready(function(){
      $('#data').DataTable();
    });
  </script>
  </body>
</html>
