<?php

include "data/koneksi.php";
$id     = rand();
$id_buku= $_POST['buku'];
$nama   = $_POST['nama'];
$email  = $_POST['email'];
$prodi  = $_POST['prodi'];
$alamat = $_POST['alamat'];
$pinjam = date("d-m-Y");
$kembali = date('d-m-Y',time() + (7 * 24 * 60 * 60));

?>


<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Glint</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">
    <!-- services
    ================================================== -->
    <section id='services' class="s-services" style="margin-top:-50px;">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Baca Buku</h3>
                <h1 class="display-2">Detail Peminjaman Buku</h1><hr>
                <?php
                include "data/koneksi.php";
                $buku = "SELECT * FROM `buku` WHERE id_buku='$id_buku'";

                $result      = mysqli_query($connect,$buku);
                while ($row  = mysqli_fetch_row($result))
                  {
                    $id       = $row[0];
                    $nama_buku     = $row[1];
                    $jenis    = $row[2];
                    $tahun    = $row[3];
                    $gambar   = $row[4];
                ?>
                <div class="row">
                  <div class="col-three" style="  height:400px;">
                    <div class="col-twelve" style="border:solid #fff; width:100%; height:350px;background:url('gambar/<?php echo $gambar; ?>'); background-size:cover;background-position: center;">

                    </div>
                    <div class="col-twelve" style=" width:100%; height:35px;margin-top:10px;">
                      <form method="post" action="done.php">
                        <input type="hidden" name="id_peminjam" value="<?php echo $id; ?>">
                        <input type="hidden" name="nama" value="<?php echo $nama; ?>">
                        <input type="hidden" name="alamat" value="<?php echo $alamat; ?>">
                        <input type="hidden" name="email" value="<?php echo $email; ?>">
                        <input type="hidden" name="prodi" value="<?php echo $prodi; ?>">
                        <input type="hidden" name="buku" value="<?php echo $id_buku; ?>">
                        <input type="submit" value="Pinjam" style="background:#39b54a;border:solid #fff;color:#fff">
                      </form>
                    </div>
                  </div>
                  <div class="col-nine">
                  <div class="row">
                    <div class="col-two" style="text-align:left; width:120px;">
                      <p>Judul </p>
                    </div>
                    <div class="col-ten" style="text-align:left; font-size:18px;font-weight:800;">
                      <p> <?php echo $nama; ?> </p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-two" style="text-align:left; width:120px;">
                      <p>Pinjam </p>
                    </div>
                    <div class="col-ten" style="text-align:left; font-size:18px;font-weight:800;">
                      <p> <?php echo $pinjam; ?> </p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-two" style="text-align:left; width:120px;">
                      <p>kembali </p>
                    </div>
                    <div class="col-ten" style="text-align:left; font-size:18px;font-weight:800;">
                      <p> <?php echo $kembali; ?> </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-two" style="text-align:left; width:120px;">
                      <p>Nama </p>
                    </div>
                    <div class="col-ten" style="text-align:left; font-size:18px;font-weight:800;">
                      <p> <?php echo $nama; ?> </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-two" style="text-align:left; width:120px;">
                      <p>Alamat </p>
                    </div>
                    <div class="col-ten" style="text-align:left; font-size:18px;font-weight:800;">
                      <p> <?php echo $alamat; ?></p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-two" style="text-align:left; width:120px;">
                      <p>Prodi </p>
                    </div>
                    <div class="col-ten" style="text-align:left; font-size:18px;font-weight:800;">
                      <p> <?php echo $prodi; ?>  </p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-two" style="text-align:left; width:120px;">
                      <p>Email </p>
                    </div>
                    <div class="col-ten" style="text-align:left; font-size:18px;font-weight:800;">
                      <p> <?php echo $email; ?> </p>
                    </div>
                  </div>
                <?php } ?>
                    </div>
                  </div>
                </div>


            </div>
        </div> <!-- end section-header -->
    </section> <!-- end s-services -->

    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
