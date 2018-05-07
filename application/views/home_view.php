<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tugas UTS</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link rel ="stylesheet" href="assets/css/clean-blog.min.css">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#page-top"><img src="assets/img/log.png" width="60" height="40"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-trigger" href="welcome">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="home">Data Barang</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="home">Data Tabel</a>
            </li>




          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('assets/img/elek.png')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Inventaris Barang</h1>
              <span class="subheading">Jaya Makmur</span>
            </div>
          </div>
        </div>
      </div>
    </header>


<span id="about"></span>   
   <center><b>
    Inventaris Barang
     


    <!-- Main Content -->
    <tr>
   <div class="container">
        <a href="home/tambah" class="btn btn-success"> Tambah </a>
   </div>

   <a href='home/edit/<?php echo $key->id_barang?>' class='btn btn-sm btn-info'>Update</a>

                <a href='home/delete/<?php echo $key->id_barang;?>' class='btn btn-sm btn-danger'>Hapus</a>


     


   </center> </b>
   <br></br>

    <div class="container text-center">
      <?php foreach ($artikel as $key): ?>


<!-- form untuk menambahkan data -->

        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <table style="margin-bottom: 30px;">
            <tr>
              <td>
                <a href="home/detail/<?php echo $key->id_barang ?>" style="color: black;">
                  <img src="img/<?php echo $key->image;?>" alt="Image" width="500" height="400">
                  <br>
                  <?php echo $key->nama_barang ?>
                </a>
                <br></br>
                <!-- <button>Edit</button> -->


                <a href='home/edit/<?php echo $key->id_barang?>' class='btn btn-sm btn-info'>Update</a>

                <a href='home/delete/<?php echo $key->id_barang;?>' class='btn btn-sm btn-danger'>Hapus</a>

              </td>
            </tr>
          </table>
        </div>
      <?php endforeach ?>
    </div>

    <div class="container">
      <!-- <?php
        echo form_open('home/tambah', array('enctype'=>'multipart/form-data')); 
       ?>
      <table>
        <tr>
          <td>Judul</td>
          <td>:</td>
          <td><input type="text" name="input_judul" value="<?php echo set_value('input_jumlah_stok'); ?>"></td>
        </tr>
        <tr>
          <td>Content</td>
          <td>:</td>
          <td><input type="text" name="input_content" value=""></td>
        </tr>
        <tr>
          <td>Tanggal </td>
          <td>:</td>
          <td><input type="text" name="input_tanggal" value=""></td>
        </tr>
        <tr>
          <td>Gambar</td>
          <td>:</td>
          <td><input type="file" name="input_gambar"></td>
        </tr>
        <tr>
          <td colspan="3"><input type="submit" name="simpan" value="simpan"></td>
        </tr>
 -->

      </table>
    </div>

<br>
<div>
  <a href='category' class='btn btn-sm btn-danger'>Kategori</a>
</div>


              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted"><center>Copyright &copy; Your Website 2018</center></p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="assets/js/clean-blog.min.js"></script>

  </body>

</html>
