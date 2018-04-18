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
                <h1 class="display-2">Daftar Buku Tersedia</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row services-list block-1-4 block-tab-full">
          <div style="margin-left:100px;">
            <?php
            include "data/koneksi.php";
            $buku = "SELECT * FROM `buku`";

            $result      = mysqli_query($connect,$buku);
            while ($row  = mysqli_fetch_row($result))
              {
                $id       = $row[0];
                $nama     = $row[1];
                $jenis    = $row[2];
                $tahun    = $row[3];
                $gambar   = $row[4];
            ?>
            <div class="col-block service-item" data-aos="fade-up" style="border:solid thin #ddd; padding:20px;margin:10px;margin-bottom:40px;width:240px;height:385px;">
              <div class="pic-grid" style="height:200px; width:200px; background:url('gambar/<?php echo $gambar; ?>'); background-size:cover;background-position: center;">
              </div>
                    <h5 style="margin-top:10px;text-align:center;height:40px;"><a href="index.php"><?php echo $nama; ?></a></h5>
                    <div class="row block-1-2">
                      <div class="col-block" style="font-size: 12px;">
                        <?php echo $jenis; ?>
                      </div>
                      <div class="col-block" style="float:right;text-align: center;">
                        <h3 class="h3" style="margin-bottom:0px;color:#39b54a;">1</h3><p style="font-size:10px;text-transform:uppercase">Tersedia</p>
                      </div>
                      <a href="peminjam.php?id=<?php echo $id; ?>"><button type="button" name="pinjam" class="full-width btn--primary"> Pinjam </button></a>
                    </div>
                  </div>
            <?php } ?>

          </div>
        </div> <!-- end services-list -->

    </section> <!-- end s-services -->

    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
