<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Data Homestay</title>

</head>

<body>

<h1 style='text-align:center;'>READ DATA HOMESTAY</h1>

                <table class="table ">
                  <thead>
              <tr>
                <th>No</th>
                <th>Nama Homestay</th>
                <th>Alamat</th>
                <th>Kontak</th>
                <th>Lokasi Map</th>
                <th>Kapasitas Kamar</th>
                <th>Gambar Homestay</th>
              </tr>
            </thead>
               <?php 
               include('koneksi.php');
            $no = 1;
            $query = mysqli_query($koneksi,"SELECT * FROM data_homestay ");
            while($row = mysqli_fetch_array($query))
            {
                ?>
                <tbody>
                <tr>
                    <td><?php echo $no++; ?></td>
                     <td><?php echo $row['nama_homestay']; ?></td>
                     <td><?php echo $row['alamat']; ?></td>
                    <td><?php echo $row['kontak']; ?></td>
                    <td><a href="<?php echo $row['lokasi_map']; ?>">Klik Map</a></td>
                    <td><?php echo $row['kap_kamar']; ?></td>
                    <td><?php echo $row['gbr_homestay']; ?></td>
                </tr></tbody>
                <?php
            }
            ?>
                </table>
             
</body>
</html>
