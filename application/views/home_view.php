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
     </b></center>

<div class="container" style="padding-top: 20px;" >
    <div class="col-md-12">
    <h3><span class="fa fa-plus"></span> Data Barang </h3>          
    <a style=" margin-bottom:20px" href="home/tambah" class="btn btn-info col-md-2 test"><span class="fa fa-plus"> Tambah Barang</span> <br/> 
    </a>
    <a style="margin-bottom:20px" href='category' class='btn btn-sm btn-danger'>Kategori</a>
    <br/>
    <br/>
   </div> 

    <table class="table table-hover" >
      <tr align="center">
        <th class="col-md-0">No</th>
        <th class="col-md-0">ID Barang</th>
        <th class="col-md-0">ID Kategori</th>
        <th class="col-md-0">Nama Barang</th>
        <th class="col-md-0">Total Barang</th>
        <th class="col-md-0">Harga Barang</th>
        <th class="col-md-0">Keterangan Barang</th>
        <th class="col-md-0">Gambar</th>
        <th class="col-md-0">Tanggal Masuk</th>
        <th class="col-md-0">Opsi</th>
      </tr>
      <?php 
        $no=1;
        foreach($barang as $b)
        {
      ?>
        <tr align="center">
          <td><?php echo $no++ ?></td>
          <td><?php echo $b->id_barang; ?></td>
          <td><?php echo $b->id_kategori; ?></td>
          <td><?php echo $b->nama_barang; ?></td>
          <td><?php echo $b->jumlah_stok; ?></td>
          <td><?php echo $b->harga_satuan; ?></td>
          <td><?php echo $b->keterangan; ?></td>
          <td><img style='width:100px;height:150px' src="<?php echo base_url().'assets/img/'?><?php echo $b->gambar; ?>"></td>
          <td><?php echo $b->tanggal; ?></td>
          <td>
            <a href="home/edit/<?php echo $b->id_barang; ?>"  class="btn btn-primary">
              <span class="fa fa-edit">  Edit</span>
            </a>
            <br>
            <a href="<?php echo base_url()."home/delete/".$b->id_barang; ?> " onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')"  class="btn btn-danger">
              <span class="fa fa-trash">  Hapus</span>
            </a>
          </td>
        </tr>   
        <?php 
      }
      ?>
    </table>
  </div>
<br>



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