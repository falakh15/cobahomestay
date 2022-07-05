<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Input HS</title>

  
</head>
<h1 style="text-align:center ;">INPUT Homestay</h1>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            
            <!-- /.card -->

            <div class="card">
             
              <div class="card-body ">
                <?php
                include('koneksi.php');
                  $sql="SELECT * FROM data_homestay";
                $que = mysqli_query($koneksi,$sql);
              if(isset($_POST['tombol']))
              {
                $file_name = $_FILES['gambar']['name'];
                $file_size = $_FILES['gambar']['size'];
                $file_type = $_FILES['gambar']['type'];
              
                  
                      

                      if ($file_size < 2048000 and ($file_type =='image/jpg' or $file_type == 'image/png' or $file_type =='image/jpeg'))
                      {
                        
                         $image   = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
                          $judul = $_POST['judul_berita'];
                          $berita = $_POST['isi_berita'];
                          $tglpost = $_POST['tgl_post'];
                          
                           mysqli_query($koneksi,"update berita set judul_berita='$judul',isi_berita='$berita',gambar='$image',nama_gambar='$file_name',tipe_gambar='$file_type',ukuran_gambar='$file_size',tgl_post='$tglpost' WHERE id_berita='$id_berita'");
                      echo '<span style="color:Green"><b><u>Berita Berhasil Disimpan</u></b></span><br>';
                      echo '<span style="color:Green"><b><u><a href="postberita.php">Kembali Ke Post Berita</a></u></b></span>';


                      }
                      else
                      {
                        
                          echo '<span style="color:red"><b><u><i>Harap Upload ulang image</i></u></b></span>';
                      }

                  
              }
              ?>


     
      <!-- End Icon Block -->

      <!-- Contact Form -->
      <section class="wt-section">
        <div class="post-preview">
          
    
        </div>

<div class="col-md-10 p-1  h-md-220 text-left" >
   <?php while ($res =mysqli_fetch_array($que)) { 
?>
  <div class="card-body r">
    <form method="post" enctype="multipart/form-data">
      <div class="form-group cols-sm-6">
        <label>Tanggal Post</label>
        <input type="text" name="tgl_post" class="form-control" >
      </div>
       <div class="form-group cols-sm-6">
        <label>Judul Berita</label>
        <input type="text" name="judul_berita"   class="form-control" required="">
      </div>
      <div class="form-group cols-sm-6">
        <label>Tulis Berita</label>
        <textarea class="ckeditor" rows="4" name="isi_berita"></textarea> 
      </div>
       <div class="form-group cols-sm-6">
        <label>Gambar Sebelumnya </label><br>
      </div>
    
      <div class="form-group cols-sm-6">
        <label>Upload Gambar Terbaru</label>
        <input type="file" name="gambar"/>
      </div>
    
      <div class="form-group cols-sm-6">
        <input type="submit" name="tombol" class="btn btn-success"  >
      </div>
        </form>
      <?php } ?>
    </div>
</div>

            </body>
</html>
