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
              <h1 class="display-2">Input Buku</h1>
                <div class="row">
                  <form action="../input-buku.php" method="post" enctype="multipart/form-data">
                  <div class="col-six">
                    <input type="text"   name="id" placeholder="Kode Buku" style="width:100%">
                  </div>
                  <div class="col-six">
                    <input type="text" name="judul" placeholder="Judul Buku"  style="width:100%">
                  </div>
                  <div class="col-six">
                    <input type="text" name="jenis" placeholder="Jenis Buku"  style="width:100%">
                  </div>
                  <div class="col-six">
                    <input type="text" name="tahun" placeholder="Tahun Terbit"  style="width:100%">
                  </div>
                  <div class="col-twelve">
                    <label for="fileToUpload" style="width:100%;background:#515151;color:#fff; border:none;height:50px; padding-top:12px;">Upload Cover</label>
                    <input type="file" name="fileToUpload" id="fileToUpload" style="opacity: 0;position: absolute;z-index: -1;"/>
                  </div>
                  <div class="col-twelve">
                    <input type="submit" value="Simpan" style="width:100%;background:#39b54a;color:#fff; border:none;">
                  </div>
                  </form>
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
