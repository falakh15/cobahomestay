<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>List Kamar HS</title>

</head>

<body>

<h1 style='text-align:center;'>READ DATA KAMAR</h1>

                <table class="table ">
                  <thead>
              <tr>
                <th>No</th>
                <th>Kelas_Kamar</th>
                <th>Fasilitas</th>
                <th>gbr_kamar</th>
                <th>id_homestay</th>
                <th>keterangan</th>
              </tr>
            </thead>
               <?php 
               include('koneksi.php');
            $no = 1;
            $query = mysqli_query($koneksi,"SELECT * FROM data_kamar ");
            while($row = mysqli_fetch_array($query))
            {
                ?>
                <tbody>
                <tr>
                    <td><?php echo $no++; ?></td>
                     <td><?php echo $row['kelas_kamar']; ?></td>
                     <td><?php echo $row['fasilitas']; ?></td>
                    <td><?php echo $row['gbr_kamar']; ?></td>
                    <td><?php echo $row['id_homestay']; ?></td>
                    <td><?php echo $row['keterangan']; ?></td>
                </tr></tbody>
                <?php
            }
            ?>
                </table>
             
</body>
</html>
