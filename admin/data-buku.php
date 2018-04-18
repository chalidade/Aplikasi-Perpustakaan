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
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/vendor.css">
    <link rel="stylesheet" href="../css/main.css">

    <!-- script
    ================================================== -->
    <script src="../js/modernizr.js"></script>
    <script src="../js/pace.min.js"></script>

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
              <h3 class="subhead">Dashboard</h3>
              <h1 class="display-2">Data Buku</h1>
                <div class="row">
                  <table class="table">
                    <tr>
                    <th>Kode</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Tahun Terbit</th>
                    <th>Option</th>
                    </tr>
                    <?php
                    include "../data/koneksi.php";
                    $buku = "SELECT * FROM `buku`";

                    $result      = mysqli_query($connect,$buku);
                    while ($row  = mysqli_fetch_row($result))
                      {
                        $id        = $row[0];
                        $nama_buku = $row[1];
                        $jenis     = $row[2];
                        $tahun     = $row[3];
                        $gambar    = $row[4];
                    ?>
                    <tr>
                      <td><?php echo $id; ?></td>
                      <td><?php echo $nama_buku; ?></td>
                      <td><?php echo $jenis; ?></td>
                      <td><?php echo $tahun; ?></td>
                      <td><center> <a href="hapus.php?id=<?php echo $id; ?>&data=buku"><img src="../images/Trash_Can-512.png" width="20px;"></a></center></td>
                    </tr>
                  <?php } ?>
                </table>
                 <div style="float:right">
                  <div class="col-six"style="background:#39b54a;border:solid #fff;height:50px;font-size:18px;padding-top:5px;color:#fff">
                    <a href="dashboard.php" style="color:#fff"> Kembali </a>
                  </div>
                  <div class="col-six" style="background:#39b54a;border:solid #fff;height:50px;font-size:18px;padding-top:5px;color:#fff">
                    <a href="input.php"  style="color:#fff"> Tambah </a>
                  </div>
                </div>
                </div>
            </div>
        </div> <!-- end section-header -->
    </section> <!-- end s-services -->

    <!-- Java Script
    ================================================== -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>

</body>


</html>
